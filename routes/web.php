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
laravel9j-deneme
//asdasdasda
*/
// 1-Do something in route
Route::get('/hello', function () {
    return 'Hello World';
});
// 2-Call view in route
Route::get('/', function () {
    return view('home.index');
});






Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/home2', function () {

    return view('home.index', ['name' => 'Seyit']);
});



     Route::get('/home', [homecontroller::class, 'index'])->name('home');
     Route::get('/test/{id}/{name}', [homecontroller::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
     Route::get('/param/{id}/{number}', [homecontroller::class, 'param'])->whereNumber('id')->whereAlpha('name')->name('param');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ************************ ADMIN PANEL ROUTES *********************//
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');
// **** ADMİN category *****  //
Route::get('/admin/category',[AdminCategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[AdminCategoryController::class,'create'])->name('admin_category_create');
Route::get('/admin/category/store',[AdminCategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name('admin_category_edit');
Route::get('/admin/category/update/{id}',[AdminCategoryController::class,'update'])->name('admin_category_update');
Route::get('/admin/category/destroy/{id}',[AdminCategoryController::class,'destroy'])->name('admin_category_destroy');
Route::get('/admin/category/show/{id}',[AdminCategoryController::class,'show'])->name('admin_category_show');


