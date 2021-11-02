@extends('layouts.frontlayout')
@section('content')
<div class="flex justify-center py-36">
    @foreach($data as $post)
        <div>
            <div class="flex h-96">
                <img class="object-cover w-full h-full rounded-lg" src="{{ asset('storage/'. $post->thumbnail) }}" alt="image" >
            </div>
            <h1 class="py-16 text-5xl text-center text-white">{{ $post->quote_en }}</h1>
            <div class="py-4 text-center text-white">
                <a class="font-sans text-5xl underline" href="{{ route('movie',[$post->category->category_en]) }}">{{ $post->category->category_en }}</a>
            </div>
        </div>
    @endforeach
</div>
@guest
    <div class="absolute ml-10 text-sm text-gray-500 underline opacity-50 -my-14 hover:text-gray-300">
        <a class="font-sans" href="{{ route('login') }}">Authorization for the administrator</a>
    </div>
@endguest
@auth
    <div class="absolute ml-10 text-sm text-gray-500 underline opacity-50 -my-14 hover:text-gray-300">
        <a class="font-sans" href="{{ route('dashboard') }}">Go to Adminpanel</a>
    </div>
@endauth
@endsection
