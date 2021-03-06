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
Route::group(['middleware' => 'auth'], function(){
    Route::resource('posts', \App\Http\Controllers\PostController::class);
    Route::inertia('about', 'About')->name('about');
});

Route::inertia('login', 'Auth/Login')->name('login');

Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login.post');
Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('generate-password', [\App\Http\Controllers\Auth\LoginController::class, 'generatePassword'])->name('login.generatePassword');

Route::inertia('projects/todo', 'Projects/Todo')->name('projects.todo');
Route::inertia('projects/counter', 'Projects/Counter')->name('projects.counter');
Route::inertia('projects/list', 'Projects/List')->name('projects.list');
Route::inertia('projects/teleport', 'Projects/Teleport')->name('projects.teleport');

Route::inertia('backoffice/dashboard-1', 'Backoffice/Dashboard1')->name('backoffice.dashboard1');
Route::inertia('backoffice/dashboard-2', 'Backoffice/Dashboard2')->name('backoffice.dashboard2');
Route::inertia('backoffice/dashboard-2/form', 'Backoffice/Form')->name('backoffice.form');
Route::inertia('backoffice/dashboard-2/toast', 'Backoffice/Toast')->name('backoffice.toast');
Route::inertia('backoffice/dashboard-2/alert', 'Backoffice/Alert')->name('backoffice.alert');
Route::inertia('backoffice/dashboard-2/accordion', 'Backoffice/Accordion')->name('backoffice.accordion');

Route::inertia('backoffice/dashboard-3', 'Backoffice/Dashboard3')->name('backoffice.dashboard3');
Route::get('backoffice/dashboard-4', [\App\Http\Controllers\Backoffice\Dashboard4\IndexController::class, 'index'])->name('backoffice.dashboard4');
Route::get('backoffice/dashboard-4/test', [\App\Http\Controllers\Backoffice\Dashboard4\TestController::class, 'index'])->name('backoffice.dashboard4.test');
Route::get('backoffice/dashboard-4/datatables', [\App\Http\Controllers\Backoffice\Dashboard4\DatatableController::class, 'index'])->name('backoffice.dashboard4.datatables');

Route::get('backoffice/dashboard-5', [\App\Http\Controllers\Backoffice\Dashboard5\DashboardController::class, 'index'])->name('backoffice.dashboard5');
Route::get('backoffice/dashboard-5/datatable', [\App\Http\Controllers\Backoffice\Dashboard5\DatatableController::class, 'index'])->name('backoffice.dashboard5.datatable');

Route::get('no-db', [\App\Http\Controllers\NoDB\IndexController::class, 'index'])->name('no-db.index');
Route::get('no-db/about', [\App\Http\Controllers\NoDB\IndexController::class, 'index'])->name('no-db.about');
Route::get('no-db/resume', [\App\Http\Controllers\NoDB\IndexController::class, 'index'])->name('no-db.resume');


// Route::get('/', function () {
//     return view('welcome');
// });
