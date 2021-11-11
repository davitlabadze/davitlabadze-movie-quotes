@extends('layouts.frontlayout')
@section('content')
<div class="flex justify-center py-32">
    @foreach($data as $post)
        <div>
            <div class="flex h-96">
                <img class="object-cover w-full h-full rounded-lg" src="{{ asset('storage/'. $post->thumbnail) }}" alt="image" >
            </div>
            <h1 class="py-12 text-5xl text-center text-white">{{ $post->quote }}</h1>
            <div class="py-2 text-center text-white">
                <a class="font-sans text-5xl underline" href="{{ route('movie',[$post->category->id]) }}">{{ $post->category->movie }}</a>
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
