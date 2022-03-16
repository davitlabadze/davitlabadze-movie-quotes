<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class ShowMovieQuotesController extends Controller
{
    public function index(Movie $movie)
    {
        $data = $movie->with('quotes')->find($movie->id);
        return response()->json($data);
    }
}
