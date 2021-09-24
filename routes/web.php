<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
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
    return view('auth.login');
});


Route::get('/about', [LandingController::class,'about'])->name('about');
Route::get('/contact', [LandingController::class,'contact'])->name('contact');
Route::get('/detail/{id}', [LandingController::class,'detail'])->name('detail');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\LandingController::class, 'index'])->name('index');
