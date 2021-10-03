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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\UsersController::class, 'index'])->name('user');
Route::get('/user/create', [\App\Http\Controllers\UsersController::class, 'create'])->name('create');
Route::post('/user/store', [\App\Http\Controllers\UsersController::class, 'store'])->name('store');
Route::post('/user/{post}', [\App\Http\Controllers\UsersController::class, 'destroy'])->name('delete');
Route::get('/user/search', [\App\Http\Controllers\UsersController::class, 'show'])->name('search_result');
Route::get('/user/search', [\App\Http\Controllers\UsersController::class, 'search'])->name
('search');







Auth::routes();


