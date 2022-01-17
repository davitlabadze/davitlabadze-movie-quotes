@extends('layouts.backlayout')
@section('content')
<div class="flex p-2 mb-10 -mt-12">
    <p class="flex p-2"><svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
    </svg>
     Edit Movie</p>
    <button class="flex p-2 text-white bg-gray-500 hover:bg-gray-600 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg> <a href="{{ route('category.index') }}">All Data</a>
    </button>
</div>
<form action="{{url('admin/category/'.$category->id)}}" method="POST" class="mt-10" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @foreach (config('app.available_locales') as $locale)
    <div class="mb-6">
        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="movie_{{ $locale }}"> Movie ({{ strtoupper($locale) }}) </label>
        <input class="w-full p-2 border border-gray-400" type="text" name="movie[{{ $locale }}]"  id="movie_{{ $locale }}" value=" {{ $category->getTranslation('movie',$locale) }}" />
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
