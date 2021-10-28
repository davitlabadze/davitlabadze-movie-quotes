<?php

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
});
Route::get('/movie', function () {
    return view('movie');
});

Route::get('/login', function () {
    return view('sessions/login');
});

//posts
Route::resource('/admin/post', PostController::class)->except('show');

//categories
Route::resource('/admin/category', CategoryController::class)->except('show');


Route::get('admin/dashboard', function () {
    return view('backend.dashboard');
});




