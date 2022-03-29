<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('id', 'asc')->get();
        return response()->json($movies);
    }

    public function store(Request $request)
    {
        $request->validate([
            'movie-en'  => 'required',
            'movie-ka'  => 'required',
          ]);

        $newMovie = new Movie;
        $newMovie->movie = ['en' => $request->input('movie-en')];
        $newMovie->movie = ['ka' => $request->input('movie-ka')];

        $newMovie->save();
        return response()->json($newMovie);
    }

    public function edit($id)
    {
        $movieToEdit = Movie::findOrfail($id);
        return response()->json($movieToEdit);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'movie-en'  => 'required',
            'movie-ka'  => 'required',
          ]);

        $movie = Movie::findOrFail($id);
        $attributes = [
                'movie' => [
                    'en' => $request->input('movie-en'),
                    'ka' => $request->input('movie-ka'),
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
