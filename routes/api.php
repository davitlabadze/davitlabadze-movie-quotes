<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ShowMovieQuotesController;
use App\Http\Controllers\ShowQuoteController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AdminController::class,'login']);
Route::get('/get-quote', [ShowQuoteController::class,'index']);
Route::get('/get-quotes/{movie:id}', [ShowMovieQuotesController::class,'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AdminController::class,'logout']);
    Route::get('/dashboard', [AdminController::class,'dashboard']);
    Route::get('/movies', [MovieController::class,'index']);
    Route::post('/movies/create', [MovieController::class,'store']);
    Route::get('/movies/{movie:id}/edit', [MovieController::class,'edit']);
    Route::put('/movies/{movie:id}/update', [MovieController::class,'update']);
    Route::delete('/movies/{movie:id}', [MovieController::class,'destroy']);
    Route::get('/quotes', [QuoteController::class,'index']);
    Route::get('/quotes/create', [QuoteController::class,'create']);
    Route::post('/quotes/create', [QuoteController::class,'store']);
    Route::get('/quotes/{quote:id}/edit', [QuoteController::class,'edit']);
    Route::put('/quotes/{quote:id}/update', [QuoteController::class,'update']);
    Route::delete('/quotes/{quote:id}', [QuoteController::class,'destroy']);
});
