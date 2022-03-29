<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::orderBy('id', 'DESC')->with('movie')->get();
        return response()->json($quotes);
    }

    public function create()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function store(Request $request)
    {
        $request->validate([
            'quote-en'  => 'required',
            'quote-ka'  => 'required',
            'thumbnail' => 'required|image',
            'movie-id' => ['required', Rule::exists('movies', 'id')],
          ]);
        $newQuote = new Quote;
        $newQuote->movie_id  = $request->input('movie-id');
        $newQuote->quote     = ['en' => $request->input('quote-en')];
        $newQuote->quote     = ['ka' => $request->input('quote-ka')];
        $newQuote->thumbnail = $request->file('thumbnail')->store('thumbnails');
        $newQuote->save();
        return response()->json($newQuote);
    }

    public function edit($id)
    {
        $movies = Movie::all();
        $quote = Quote::findOrfail($id);
        return response()->json(['movies'=>$movies,'quote'=>$quote]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quote-en'  => 'required',
            'quote-ka'  => 'required',
            'thumbnail' => 'required|image',
            'movie-id' => ['required', Rule::exists('movies', 'id')],
        ]);
        $quote = Quote::findOrFail($id);
        $attributes = [
            'movie_id' => $request->input('movie-id'),
            'quote'    => [
                'en' => $request->input('quote-en'),
                'ka' => $request->input('quote-ka'),
            ],
            'thumbnail' => $request->file('thumbnail')->store('thumbnails')
        ];
        $quote->update($attributes);

        return response()->json($quote);
    }

    public function destroy($id)
    {
        Quote::where('id', $id)->delete();
        return response()->json(Quote::all());
    }
}
