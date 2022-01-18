<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShowCategoryPostsController;
use App\Http\Controllers\ShowPostController;
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

$router->group(['middleware' => [
    'setlocale',
]], function () use ($router) {
    $router->get('/', [ShowPostController::class,'index'])->name('home');
    $router->get('/movie/{category:id}', [ShowCategoryPostsController::class,'index'])->name('movie');
});

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class,'login'])->name('login');
    Route::post('/login', [AdminController::class,'submitLogin']);
    Route::get('/logout', [AdminController::class,'destroy'])->name('logout');
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::resource('/quotes', PostController::class)->names('quotes');
    Route::resource('/movies', CategoryController::class)->names('movies');
});
