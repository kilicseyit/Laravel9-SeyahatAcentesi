<?php

use App\Http\Controllers\AdminPanel\AdminPackageController;
use App\Http\Controllers\AdminPanel\AdminPackagesController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/home2', function () {

    return view('home.index', ['name' => 'Seyit']);
});


// ************************ HOME PAGE ROUTES *********************//
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('legisteruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login ')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');


Route::get('/test/{id}/{name}', [homecontroller::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
Route::get('/param/{id}/{number}', [homecontroller::class, 'param'])->whereNumber('id')->whereAlpha('name')->name('param');
Route::get('/package/{id}', [Homecontroller::class, 'package'])->name('package');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/categorypackages/{id}/{slug}', [HomeController::class, 'categorypackages'])->name('categorypackages');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ************************ USER AUTH ROUTES *********************//
Route::middleware('auth')->group(function () {

    // ************************ UseR PANEL ROUTES *********************//
    Route::prefix( 'userpanel')->prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/reviews','reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
    });

// ************************ ADMIN PANEL ROUTES *********************//
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');


        // ************************ GENERAL ROUTES ******************//
        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');


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
        // ************************ ADMİN MESSAGE ROUTES ******************//
        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        // ************************ ADMIN FAQ  ROUTES ******************//
        Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });

        // ************************ ADMİN COMMENT ROUTES ******************//
        Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        // ************************ ADMİN USER ROUTES ******************//
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit/{id}', 'show')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');

        });
    });
});


