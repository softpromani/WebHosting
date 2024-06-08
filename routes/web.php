<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login/store', [LoginController::class, 'loginStore'])->name('loginStore');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    Route::post('update-password',[LoginController::class,'updatePassword'])->name('updatePassword');
    Route::get('web-setting',[WebSettingController::class,'webSetting'])->name('webSetting');





    
});
