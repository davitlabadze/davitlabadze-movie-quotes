<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::orderBy('id', 'DESC')->paginate(5);
        return view('backend.quote.index', ['quotes' => $quotes]);
    }

    public function create()
    {
        $movie = Movie::all();
        return view('backend.quote.add')->with('movie', $movie);
    }

    public function store(StoreQuoteRequest $request)
    {
        $attributes = $request->validated();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Quote::create($attributes);
        return redirect()->route('quotes.index');
    }

    public function edit($id)
    {
        $movie = Movie::all();
        $quote = Quote::find($id);
        return view('backend.quote.update', ['movie' => $movie, 'quote' => $quote]);
    }

    public function update(StoreQuoteRequest $request, $id)
    {
        $attributes = $request->validated();
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        Quote::where('id', $id)->update($attributes);

        return redirect()->route('quotes.index');
    }

    public function destroy($id)
    {
        Quote::where('id', $id)->delete();
        return redirect()->route('quotes.index');
    }
}
