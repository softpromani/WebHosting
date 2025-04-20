<?php

namespace App\Providers;

use App\Models\Faq;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\WebSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Menu;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('home.includes.navbar',function($view){
            $menu=Menu::with('products')->ParentMenus()->get();
            $view->with('menu',$menu);
        });
        
        View::composer('home.includes.head',function($view){
            $theme_setting=WebSetting::select('key','value')->where('group', 'Theme')->get();
            $view->with('theme_setting',$theme_setting);
        });
        View::composer('home.index',function($view){
            $testimonial=Testimonial::get();
            $view->with('testimonial',$testimonial);
        });
        View::composer('home.index',function($view){
            $teamMembers=Team::get();
            $view->with('teamMembers',$teamMembers);
        });
        View::composer('home.index',function($view){
            $faqs=Faq::where('type','home-page')->latest()->get();
            $view->with('faqs',$faqs);
        });

    }
}
