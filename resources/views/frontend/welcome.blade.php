@extends('layouts.frontlayout')
@section('title','Movie')

@section('content')
<div class="flex justify-center py-32">
    @if(!$data)
    <div class="flex h-96">
        <h1 class="py-64 text-5xl text-center text-white"> @if (app()->getLocale() == 'en') No posts have been added yet @else პოსტები ჯერ არ არის დამატებული @endif </h1>
    </div>
   @else
   <div>
    <div class="flex h-96">
        <img class="object-cover w-full h-full rounded-lg" src="{{ asset('storage/'. $data->thumbnail) }}" alt="image" >
    </div>
    <h1 class="py-12 text-5xl text-center text-white">{{ $data->quote }}</h1>
    <div class="py-2 text-center text-white">
        <a class="font-sans text-5xl underline" href="{{ route('movie',['category' => $data->category->id]) }}">{{ $data->category->movie }}</a>
    </div>
</div>
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
