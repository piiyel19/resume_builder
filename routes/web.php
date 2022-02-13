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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/builder', 'App\Http\Controllers\Frame@index')->name('builder');

Route::get('/profile', 'App\Http\Controllers\Frame@profile')->name('profile');
Route::get('/work', 'App\Http\Controllers\Frame@work')->name('work');
Route::get('/education', 'App\Http\Controllers\Frame@education')->name('education');
Route::get('/skill', 'App\Http\Controllers\Frame@skill')->name('skill');

Route::get('/form/{id}', 'App\Http\Controllers\Frame@form')->name('form');


Route::get('/notification', 'App\Http\Controllers\Frame@notification')->name('notification');

Route::get('/notification-details/{id}', 'App\Http\Controllers\Frame@notification_details')->name('notification_details');

Route::get('/cv', 'App\Http\Controllers\Frame@cv')->name('cv');

Route::get('/download_cv', 'App\Http\Controllers\Frame@download_cv')->name('download_cv');
Route::get('/download_resume', 'App\Http\Controllers\Frame@download_resume')->name('download_resume');