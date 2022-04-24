<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//2
Route::get('/xxx', function () {
    return view('welcome');
});
//3

Route::get('/home',[HomeController::class ,'index'])->name('home');
Route::get('/aboutus',[HomeController::class ,'aboutus'])->name('aboutus');

//Route::get('test',[HomeController::class ,'test'])->name('test');
//5

Route::get('/test/{id}/{name}',[HomeController::class ,'test'])->whereNumber('id')->whereAlpha('name')->name('test');

//route with post


Route::get('/save',[HomeController::class ,'save'])->name('save');
Route::get('/',[HomeController::class ,'index'])->name('home');





//*************************ADMIN PANEL*********************************

Route::get('/adminpanel',[\App\Http\Controllers\Adminpanel\HomeController::class ,'index'])->name('adminhome');


Route::get('adminpanel/login',[HomeController::class,'login'])->name( 'adminpanel_login');
Route::post('adminpanel/logincheck',[HomeController::class,'logincheck'])->name( 'adminpanel_logincheck');
Route::get('adminpanel/logout',[HomeController::class,'logout'])->name( 'adminpanel_logout');



Route::middleware(['auth:sanctum', 'verified'])->get( '/dashboard', function(){
    return view('dashboard');
})->name( 'dashboard');

