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

    public function store(StoreQuoteRequest $attributes)
    {
        $newQuote = Quote::create(array_merge($attributes->validated(), [
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));

        return response()->json($newQuote);
    }

    public function edit($id)
    {
        $movies = Movie::all();
        $quote = Quote::findOrfail($id);
        return response()->json(['movies'=>$movies,'quote'=>$quote]);
    }

    public function update(StoreQuoteRequest $attributes, Quote $quote)
    {
        $attributes = $attributes->validated();

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
