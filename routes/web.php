<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/dashboard/posts', function () {
    return view('dashboard/posts');
});

Route::get('/dashboard/posts/post', function () {
    return view('dashboard/form/post');
});

//categories
Route::resource('/admin/category', CategoryController::class)->except('show');





