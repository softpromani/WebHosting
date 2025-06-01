
<?php

    use App\Http\Controllers\Admin\Auth\LoginController;
    use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryDescriptionController;
use App\Http\Controllers\Admin\ContactUsController;
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\FaqController;
    use App\Http\Controllers\Admin\MenuController;
    use App\Http\Controllers\Admin\NewseletterController;
    use App\Http\Controllers\Admin\PricePlanController;
    use App\Http\Controllers\Admin\ProductController as AdminProductController;
    use App\Http\Controllers\Admin\TeamController;
    use App\Http\Controllers\Admin\TestimonialController;
    use App\Http\Controllers\Admin\WebSettingController;
    use App\Http\Controllers\home\HomeController;
    use App\Http\Controllers\home\ProductController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/test', [HomeController::class, 'test'])->name('test');
    Route::get('about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
    Route::get('category-description/{slug}', [HomeController::class, 'categoryDescription'])->name('category-description');

    Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
    Route::get('download', [HomeController::class, 'downloads'])->name('download');
    Route::get('product/{slug}', [ProductController::class, 'index'])->name('product');
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login/store', [LoginController::class, 'loginStore'])->name('loginStore');

    Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
    Route::get('security', [HomeController::class, 'security'])->name('security');
    Route::get('partner', [HomeController::class, 'partner'])->name('partner');
    Route::get('why-us', [HomeController::class, 'whyUsPage'])->name('whyUsPage');
    Route::get('faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

    Route::get('/blog/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('single-blog'); // Contact Us
    Route::post('user-contact/store', [HomeController::class, 'contactStore'])->name('contactStore');

    Route::post('user-newsletter/store', [HomeController::class, 'newsletterStore'])->name('newsletterStore');
    Route::get('apply-now', [HomeController::class, 'applyNow'])->name('applyNow');
    Route::Post('apply-nowapplyNowStore', [HomeController::class, 'applyNowStore'])->name('applyNow-store');

    Route::post('/schedule-submit', [HomeController::class, 'scheduleBook'])->name('schedule.submit');

    Route::get('/blog/{slug}', [HomeController::class, 'showBlogDetail'])->name('blog.show');


    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::post('update-password', [LoginController::class, 'updatePassword'])->name('updatePassword');
        Route::get('web-setting', [WebSettingController::class, 'webSetting'])->name('webSetting');
        Route::post('web-setting/update', [WebSettingController::class, 'updateWebSettings'])->name('updateWebSettings');
        Route::resource('menu', MenuController::class)->name('', 'menu');
        Route::resource('product', AdminProductController::class)->name('', 'product');
        Route::get('product/destroys/{id}', [AdminProductController::class, 'destroys'])->name('destroys');

        Route::get('product/show/{step}/{product_id?}', [AdminProductController::class, 'PageLayout'])->name('product.PageLayout');
        Route::delete('product/delete/{step}/{resource_id?}', [AdminProductController::class, 'productDelete'])->name('product.productDelete');

        Route::resource('contact-us', ContactUsController::class);
        Route::resource('newsletter', NewseletterController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('team', TeamController::class);
        Route::resource('faqs', FaqController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('price-plan', PricePlanController::class);
        Route::get('free-trial-applies', [DashboardController::class, 'free_trial_applies'])->name('free-trial-applies.list');

        Route::get('category-description', [CategoryDescriptionController::class, 'index'])->name('category-description.index');
        Route::get('category-description/edit/{id}', [CategoryDescriptionController::class, 'edit'])->name('category-description.edit');
        Route::put('category-description/update/{id}', [CategoryDescriptionController::class, 'update'])->name('category-description.update');
        Route::get('cat-desc_service.cat_desc_service', [CategoryDescriptionController::class, 'catDescService'])->name('cat-desc_service.cat_desc_service');
        Route::post('cat_desc_service_save', [CategoryDescriptionController::class, 'catDescServiceSave'])->name('cat_desc_service_save');
        Route::get('category-desc-service/edit/{id}', [CategoryDescriptionController::class, 'catDesServiceEdit'])->name('cat_desc_service_edit');
        Route::delete('category-desc-service/delete/{id}', [CategoryDescriptionController::class, 'catDesServiceDelete'])->name('cat_desc_service_delete');
        // For updating an existing service
        Route::put('cat-desc-service/update/{id}', [CategoryDescriptionController::class, 'catDesServiceUpdate'])->name('cat_desc_service_update');


});
