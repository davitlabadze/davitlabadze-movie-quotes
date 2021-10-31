<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
})->name('home');
Route::get('/movie', function () {
    return view('movie');
});

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class,'login'])->name('login');
    Route::post('/login', [AdminController::class,'submit_login']);
    Route::get('/logout', [AdminController::class,'destroy'])->name('logout');
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::resource('/post', PostController::class)->except('show')->names('post');
    Route::resource('/category', CategoryController::class)->except('show')->names('category');
});
