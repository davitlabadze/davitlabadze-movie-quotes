@extends('layouts.backlayout')
@section('content')
<div class="flex p-2 mb-10 -mt-12">
    <p class="flex p-2">
        <img class="flex-shrink-0 w-6 h-6 mr-3" src="{{ asset('img/table.svg') }}" alt="table">
        Add Quote</p>
    <button class="flex p-2 text-white bg-gray-500 hover:bg-gray-600 rounded-xl">
        <img class="w-6 h-6" src="{{ asset('img/eye.svg') }}" alt="eye">
        <a href="{{ route('quotes.index') }}">All Data</a>
    </button>
</div>
<form action="{{route('quotes.index')}}" method="POST" class="mt-10" enctype="multipart/form-data">
    @csrf
    @foreach (config('app.available_locales') as $locale)
    <div class="mb-6">
        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="quote_{{ $locale }}"> Quotes ({{ strtoupper($locale) }}) </label>
        <input class="w-full p-2 border border-gray-400" type="text" name="quote[{{ $locale }}]"  id="quote_{{ $locale }}" value="{{ old('quote.' . $locale) }}" />
        @error('quote.' . $locale)
            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
        @enderror
    </div>
    @endforeach
    <div class="mb-6">
        <select name="movie_id">
            @foreach ($movie as $movie)
                <option value="{{ $movie->id }}"> {{ $movie->getTranslation('movie','en') }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="text">Image </label>
        <input type="file" name="thumbnail" id="thumbnail">
        @error('thumbnail')
            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6 w-min">
        <button type="submit" class="w-full px-4 py-2 text-white bg-green-600 rounded-lg rounderd hover:bg-green-700">Create</button>
    </div>
</form>
@endsection