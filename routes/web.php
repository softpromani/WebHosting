<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\home\ProductController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('product/{id}',[ProductController::class,'index'])->name('product');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login/store', [LoginController::class, 'loginStore'])->name('loginStore');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    Route::post('update-password',[LoginController::class,'updatePassword'])->name('updatePassword');
    Route::get('web-setting',[WebSettingController::class,'webSetting'])->name('webSetting');
    Route::post('web-setting/update',[WebSettingController::class,'updateWebSettings'])->name('updateWebSettings');
    Route::resource('menu',MenuController::class)->name('','menu');
    Route::resource('product',AdminProductController::class)->name('','product');





    
});
