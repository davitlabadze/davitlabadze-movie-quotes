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
        <div class="px-12 py-12">
            <div class="absolute w-12 h-12 px-3 py-2 text-xl text-center text-white bg-transparent border-2 rounded-full cursor-pointer opacity-30 hover:opacity-100">
                <a href="{{ route('home') }}"><</a>
            </div>
        </div>
        <div class="flex justify-center py-24">
            <main class="container max-w-lg p-16 mx-auto mt-10 bg-gray-300 border border-gray-200 rounded-xl">
                <h1 class="text-center front-bold-text-xl">Log In</h1>
                <form method="POST" class="mt-10">
                    @csrf
                    <div class="mb-6">
                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="email">email</label>
                        <input class="w-full p-2 border border-gray-400" type="email" name="email" value="{{ old('email') }}" id="" />
                        @error('email')
                            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="password">password</label>
                        <input class="w-full p-2 border border-gray-400" type="password" name="password" id="" />
                        @error('password')
                            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="px-4 py-2 text-white bg-gray-400 rounderd hover:bg-gray-500">Log In</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>
</html>
