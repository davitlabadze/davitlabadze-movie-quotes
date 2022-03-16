<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('id', 'asc')->paginate(5);
        return view('backend.movie.index', ['movies' => $movies]);
    }

    public function create()
    {
        return view('backend.movie.add');
    }

    public function store(StoreMovieRequest $request)
    {
        $attributes = $request->validated();
        Movie::create($attributes);

        return redirect()->route('movies.index');
    }

    public function edit($id)
    {
        $movieToEdit = Movie::where('id', $id)->firstOrfail();
        return view('backend.movie.update', ['movie' => $movieToEdit]);
    }

    public function update(StoreMovieRequest $request, $id)
    {
        $attributes = $request->validated();
        Movie::where('id', $id)->update($attributes);

        return redirect()->route('movies.index');
    }

    public function destroy($id)
    {
        Movie::where('id', $id)->delete();
        return redirect()->route('movies.index');
    }
}
