<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('id', 'asc')->paginate(5);
        return response()->json($movies);
    }

    public function store(Request $request){
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
        $movieToEdit = Movie::where('id', $id)->firstOrfail();
        return response()->json($movieToEdit);
    }

    public function update(StoreMovieRequest $request, $id)
    {
        $attributes = $request->validated();
        $movie = Movie::where('id', $id)->update($attributes);

        return response()->json($movie);
    }

    public function destroy($id)
    {
        Movie::where('id', $id)->delete();
        return response()->json(Movie::all());
    }
}
