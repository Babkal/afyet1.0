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
    return view('user.index');
});

Route::get('/user', [\App\Http\Controllers\UsersController::class, 'index'])->name('user');
Route::get('/user/create', [\App\Http\Controllers\UsersController::class, 'create'])->name('create');
Route::post('/user/store', [\App\Http\Controllers\UsersController::class, 'store'])->name('store');
Route::post('/user/{post}', [\App\Http\Controllers\UsersController::class, 'destroy']);



Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

