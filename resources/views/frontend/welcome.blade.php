@extends('layouts.frontlayout')
@section('content')
<div class="flex justify-center py-32">
   @if(isset($data))
    <div class="flex h-96">
        <h1 class="py-56 text-5xl text-center text-white">Posts not yet</h1>
    </div>
   @else
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
   @endif
</div>
@guest
    <div class="fixed ml-10 text-sm text-gray-500 underline opacity-50 bottom-16 hover:text-gray-300">
        <a class="font-sans" href="{{ route('login') }}">Authorization for the administrator</a>
    </div>
@endguest
@auth
    <div class="fixed ml-10 text-sm text-gray-500 underline opacity-50 bottom-16 hover:text-gray-300">
        <a class="font-sans" href="{{ route('dashboard') }}">Go to Adminpanel</a>
    </div>
@endauth
@endsection
