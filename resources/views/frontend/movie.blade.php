@extends('layouts.frontlayout')
@section('title','Movie Quotes')

@section('content')

<div class="justify-center py-36">
    <div class="absolute px-12 py-2 -mt-20">
        <div class="absolute w-12 h-12 px-3 py-2 text-xl text-center text-white bg-transparent border-2 rounded-full cursor-pointer opacity-30 hover:opacity-100">
            <a href="{{ route('home') }}"><</a>
        </div>
    </div>
    <div class="flex -mt-20 ml-96">
        <h1 class="ml-40 text-5xl text-white">{{ $category->movie }}</h1>
    </div>
    @foreach($category->posts as $post)
        <div class="flex justify-center m-14">
            <div class="bg-white rounded-lg">
                <div class=" h-96">
                    <img class="object-cover w-full h-full rounded" src="{{ asset('storage/'. $post->thumbnail) }}" alt="img" >
                </div>
                <h1 class="py-16 text-5xl text-center text-black">{{ $post->quote }}</h1>
            </div>
        </div>
    @endforeach
</div>
@endsection
