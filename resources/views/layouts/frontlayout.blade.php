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
            <div class="w-12 h-12 px-3 py-3 text-sm text-center text-white bg-transparent border-2 rounded-full cursor-pointer ">
                <a href="">EN</a>
            </div>
            <div class="w-12 h-12 px-3 py-3 text-sm text-center border-2 rounded-full cursor-pointer bg-gray-50">
                <a href="">KA</a>
            </div>
        </div>
       @yield('content')
    </div>
</body>
</html>
