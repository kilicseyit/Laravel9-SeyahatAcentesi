<?php

use App\Http\Controllers\AdminPanel\AdminPackageController;
use App\Http\Controllers\AdminPanel\AdminPackagesController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {return view('dashboard');})->name('dashboard');

// ************************ ADMIN PANEL ROUTES *********************//
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
// ************************ ADMİN CATEGORY ROUTES ******************//
        Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });
        // ************************ ADMİN PACKAGE ROUTES ******************//
        Route::prefix('/package')->name('package.')->controller(AdminPackageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });


        // ************************ ADMİN PACKAGE IMAGE GALLERY ROUTES ******************//
        Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
            Route::get('/{pid}', 'index')->name('index');
            Route::post('/store/{pid}', 'store')->name('store');
            Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
        });
    });


