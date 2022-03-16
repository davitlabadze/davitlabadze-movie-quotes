<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ShowMovieQuotesController;
use App\Http\Controllers\ShowQuoteController;
use Illuminate\Support\Facades\Route;

$router->group(['middleware' => [
    'setlocale',
]], function () use ($router) {
    $router->get('/', [ShowQuoteController::class,'index'])->name('home');
    $router->get('/movie/{movie:id}', [ShowMovieQuotesController::class,'index'])->name('movie');
});
Route::middleware('guest')->group(function () {
    Route::get('/login', [AdminController::class,'login'])->name('login');
    Route::post('/login', [AdminController::class,'submitLogin']);
});

Route::middleware('auth')->prefix('/admin')->group(function () {
    Route::get('/logout', [AdminController::class,'destroy'])->name('logout');
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::resource('/quotes', QuoteController::class)->names('quotes');
    Route::resource('/movies', MovieController::class)->names('movies');
});
