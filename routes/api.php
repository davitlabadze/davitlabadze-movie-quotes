<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ShowMovieQuotesController;
use App\Http\Controllers\ShowQuoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-quote',[ShowQuoteController::class,'index']);
Route::get('/get-quotes/{movie:id}',[ShowMovieQuotesController::class,'index']);

Route::get('/movies', [MovieController::class,'index']);
Route::post('/movies/create', [MovieController::class,'store']);
Route::get('/movies/{movie:id}/edit', [MovieController::class,'edit']);
Route::put('/movies/{movie:id}/edit', [MovieController::class,'update']);
Route::delete('/movies/{movie:id}', [MovieController::class,'destroy']);


Route::get('/quotes', [QuoteController::class,'index']);
