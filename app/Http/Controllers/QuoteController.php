<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::orderBy('id', 'DESC')->with('movie')->paginate(5);
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
