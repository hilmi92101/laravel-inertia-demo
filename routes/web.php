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

Route::resource('posts', \App\Http\Controllers\PostController::class);
Route::inertia('about', 'About')->name('about');
Route::inertia('login', 'Auth/Login')->name('login');

// Route::get('/', function () {
//     return view('welcome');
// });
