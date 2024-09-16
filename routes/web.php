
<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\Newseletter;
use App\Http\Controllers\Admin\NewseletterController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\home\ProductController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('product/{slug}',[ProductController::class,'index'])->name('product');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login/store', [LoginController::class, 'loginStore'])->name('loginStore');

Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('security', [HomeController::class, 'security'])->name('security');
Route::get('partner', [HomeController::class, 'partner'])->name('partner');
Route::get('why-us', [HomeController::class, 'whyUsPage'])->    name('whyUsPage');

// Contact Us
Route::post('user-contact/store', [HomeController::class, 'contactStore'])->name('contactStore');

Route::post('user-newsletter/store', [HomeController::class, 'newsletterStore'])->name('newsletterStore');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    Route::post('update-password',[LoginController::class,'updatePassword'])->name('updatePassword');
    Route::get('web-setting',[WebSettingController::class,'webSetting'])->name('webSetting');
    Route::post('web-setting/update',[WebSettingController::class,'updateWebSettings'])->name('updateWebSettings');
    Route::resource('menu',MenuController::class)->name('','menu');
    Route::resource('product',AdminProductController::class)->name('','product');

    Route::get('product/show/{step}/{product_id?}',[AdminProductController::class, 'PageLayout'])->name('product.PageLayout');
    Route::delete('product/delete/{step}/{resource_id?}',[AdminProductController::class, 'productDelete'])->name('product.productDelete');

    Route::resource('contact-us',ContactUsController::class);
    Route::resource('newsletter',NewseletterController::class);
    Route::resource('testimonial',TestimonialController::class);
    Route::resource('team',TeamController::class);
    Route::resource('faqs',FaqController::class);
    Route::resource('blog',BlogController::class);







});
