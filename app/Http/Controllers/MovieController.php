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

    public function store(StoreMovieRequest $attributes)
    {
        $newMovie = Movie::create($attributes->validated());

        return response()->json($newMovie);
    }

    public function edit($id)
    {
        $movieToEdit = Movie::findOrfail($id);
        return response()->json($movieToEdit);
    }

    public function update(StoreMovieRequest $attributes, Movie $movie)
    {
        $attributes = $attributes->validated();
        $movie->update($attributes);
        return response()->json($movie);
    }

    public function destroy($id)
    {
        Movie::where('id', $id)->delete();
        return response()->json(Movie::all());
    }
}
