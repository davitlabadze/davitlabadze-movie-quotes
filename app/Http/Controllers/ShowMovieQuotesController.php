<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class ShowMovieQuotesController extends Controller
{
    public function index(Movie $movie)
    {
        return view('frontend.movie', ['movie' => $movie]);
    }
}
