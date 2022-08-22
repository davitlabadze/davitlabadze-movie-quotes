<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('id', 'asc')->get();
        return response()->json($movies);
    }

    public function store(StoreMovieRequest $request)
    {
        $attributes = [
            'movie' => [
                'en' => $request->input('movie_en'),
                'ka' => $request->input('movie_ka'),
            ],
        ];

        $newMovie = Movie::create($attributes);

        return response()->json($newMovie);
    }

    public function edit($id)
    {
        $movieToEdit = Movie::findOrfail($id);
        return response()->json($movieToEdit);
    }

    public function update(StoreMovieRequest $request, Movie $movie)
    {
        $attributes = [
            'movie' => [
                'en' => $request->input('movie_en'),
                'ka' => $request->input('movie_ka'),
            ],
        ];

        $movie->update($attributes);
        return response()->json($movie);
    }

    public function destroy($id)
    {
        Movie::where('id', $id)->delete();
        return response()->json(Movie::all());
    }
}
