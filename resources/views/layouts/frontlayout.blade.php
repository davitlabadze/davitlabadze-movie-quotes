<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            background: radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%) no-repeat;
        }
    </style>
</head>
<body>
    <div class="min-h-screen">
        <div class="absolute px-12 space-y-3 py-96">
            @foreach (config('app.available_locales') as $locale)
            <div class="w-12 h-12 px-3 py-3 text-sm text-center text-black @if (app()->getLocale() != $locale) bg-gray-50 @endif bg-transparent  border-2 rounded-full cursor-pointer">
                <a href="{{ request()->url() }}?language={{ $locale }} ">{{ strtoupper($locale) }}</a>
            </div>
            @endforeach
        </div>
       @yield('content')
    </div>
</body>
</html>
