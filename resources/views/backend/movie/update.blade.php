@extends('layouts.backlayout')
@section('content')
<div class="flex p-2 mb-10 -mt-12">
    <p class="flex p-2">
        <img class="flex-shrink-0 w-6 h-6 mr-3" src="{{ asset('img/table.svg') }}" alt="table">
     Edit Movie</p>
    <button class="flex p-2 text-white bg-gray-500 hover:bg-gray-600 rounded-xl">
        <img class="w-6 h-6" src="{{ asset('img/eye.svg') }}" alt="eye">
        <a href="{{ route('movies.index') }}">All Data</a>
    </button>
</div>
<form action="{{ route('movies.update',['movie' => $movie->id])}}" method="POST" class="mt-10" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @foreach (config('app.available_locales') as $locale)
    <div class="mb-6">
        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="movie_{{ $locale }}"> Movie ({{ strtoupper($locale) }}) </label>
        <input class="w-full p-2 border border-gray-400" type="text" name="movie[{{ $locale }}]"  id="movie_{{ $locale }}" value=" {{ $movie->getTranslation('movie',$locale) }}" />
        @error('movie.' . $locale)
            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
        @enderror
    </div>
    @endforeach
    <div class="mb-6 w-min">
        <button type="submit" class="w-full px-4 py-2 text-white bg-green-600 rounded-lg rounderd hover:bg-green-700">Update</button>
    </div>
</form>
@endsection
