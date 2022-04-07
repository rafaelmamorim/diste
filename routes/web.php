<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::resource('/home',App\Http\Controllers\SeriesController::class)->middleware(['auth']);

Route::resource('series',App\Http\Controllers\SeriesController::class)->middleware(['auth']);
Route::resource('profile',App\Http\Controllers\ProfileController::class)->middleware(['auth']);
Route::resource('about',App\Http\Controllers\AboutController::class);
Route::resource('privacy',App\Http\Controllers\PrivacyController::class);
Route::resource('terms',App\Http\Controllers\TermsController::class);

