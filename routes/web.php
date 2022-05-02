<?php

use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::get('/', function () {
    return view('welcome');
});



Route::get('test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');



Route::get('/home', [HomeController::class, 'Index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//Admin
Route::prefix('admin')->name('admin.')->group(function () {

    //category
    Route::get('/', [AdminPanelHomeController::class, 'index'])->name('index');

    Route::prefix('/category')->name('category.')->controller(AdminPanelCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

});
//Admin logindmin_login');

Route::get('admin/login', [HomeController::class, 'login'])->name('admin_login');

Route::post('/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('admin_logout');

//****************ADMIN PANEL ROUTES************************
Route::get('/admin', [AdminHomeController::class,'index'])->name('admin');


 //****************** ADMIN CATEGORY ROUTES **************************
Route::get('/admin/category', [\App\Http\Controllers\AdminPanel\CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create', [\App\Http\Controllers\AdminPanel\CategoryController::class,'create'])->name('admin_category_create');


