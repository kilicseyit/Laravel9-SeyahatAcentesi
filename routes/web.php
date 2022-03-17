<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
//Route::redirect('/anasayfa', '/home')->name('anasayfa');
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');


     Route::get('/home', [homecontroller::class, 'index'])->name('Home');
     Route::get('/test/{id}', [homecontroller::class, 'test'])->where('id', '[0-9]+');;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

