<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;


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

    public function store(StoreQuoteRequest $request)
    {
        $attributes = [
            'quote' => [
                'en' => $request->input('quote_en'),
                'ka' => $request->input('quote_ka'),
            ],
            'movie_id'  => $request->input('movie_id'),
        ];

        $newQuote = Quote::create(array_merge($attributes, [
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));

        return response()->json($newQuote);
    }

    public function edit($id)
    {
        $movies = Movie::all();
        $quote = Quote::findOrfail($id);
        return response()->json(['movies' => $movies, 'quote' => $quote]);
    }

    public function update(StoreQuoteRequest $request, Quote $quote)
    {
        $attributes = [
            'quote' => [
                'en' => $request->input('quote_en'),
                'ka' => $request->input('quote_ka'),
            ],
            'movie_id'  => $request->input('movie_id'),
        ];

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $quote->update($attributes);

        return response()->json($quote);
    }

    public function destroy($id)
    {
        Quote::where('id', $id)->delete();
        return response()->json(Quote::all());
    }
}
