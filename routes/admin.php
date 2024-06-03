<?php

use App\Http\Controllers\Admin_panel_settingController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace'=>'admin','prefix'=>'admin','middlewere'=> 'auth:admin'],function(){
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout', [loginController::class ,'logout' ])->name('admin.logout');
    Route::get('/adminpanelsetting/show', [Admin_panel_settingController::class ,'index' ])->name('admin.adminPanelSetting.index');
    Route::get('/adminpanelsetting/getCompanyInfo', [Admin_panel_settingController::class ,'get_company_info' ]);
    
});


Route::group(['namespace'=>'admin','prefix'=>'admin','middlewere'=> 'guest:admin'],function(){
    Route::get('login', [loginController::class, 'show_login_view'])->name('admin.showlogin');
    Route::post('login', [loginController::class, 'login'])->name('admin.login');

});
