@extends('layouts.backlayout')
@section('content')
<div class="flex p-2 mb-10 -mt-12">
    <p class="flex p-2">
        <img class="flex-shrink-0 w-6 h-6 mr-3" src="{{ asset('img/table.svg') }}" alt="table">
     Edit Quote</p>
    <button class="flex p-2 text-white bg-gray-500 hover:bg-gray-600 rounded-xl">
        <img class="w-6 h-6" src="{{ asset('img/eye.svg') }}" alt="eye">
        <a href="{{ route('quotes.index') }}">All Data</a>
    </button>
</div>
<form action="{{ route('quotes.update',['quote' => $post->id])}}" method="POST" class="mt-10" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @foreach (config('app.available_locales') as $locale)
    <div class="mb-6">
        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="quote_{{ $locale }}"> Quote ({{ strtoupper($locale) }}) </label>
        <input class="w-full p-2 border border-gray-400" type="text" name="quote[{{ $locale }}]"  id="quote_{{ $locale }}" value="{{ $post->getTranslation('quote',$locale) }}" />
        @error('quote.' . $locale)
            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
        @enderror
    </div>
    @endforeach
    <div class="mt-2 mb-6">
        <label for="category_id">Movie </label>
        <select name="category_id" id="category_id">
            @foreach ($category as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}
                    > {{ $category->getTranslation('movie','en') }}</option>
            @endforeach
            </div>
        </select>
    </div>
    <div class="flex mb-6" >
       <div class="p-2 border border-gray-500 rounded ">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase " for="thumbnail">Image</label>
            <input type="file" name="thumbnail" value="{{ $post->thumbnail }}" id="thumbnail">
            @error('thumbnail')
                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
            @enderror
       </div>
        <img src="{{ asset('storage/'. $post->thumbnail) }}"  width="64" height="64" class="ml-2" alt="image">
    </div>
    <div class="mb-6 w-min">
        <button type="submit" class="w-full px-4 py-2 text-white bg-green-600 rounded-lg rounderd hover:bg-green-700">Edit</button>
    </div>
</form>
@endsection
