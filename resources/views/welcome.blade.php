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
            background: #3D3B3B;
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
        <div class="flex justify-center py-36">
            <div>
                <div class="flex h-96">
                    <img class="object-cover w-full h-full rounded-lg" src="./img/solder.jpg" alt="" >
                </div>
                <h1 class="py-16 text-5xl text-center text-white">“What should I tell you your mother?!”</h1>  
                <div class="py-4 text-center text-white">
                    <a class="font-sans text-5xl underline" href="http://localhost:8000/movie">Father of a Soldier</a>
                </div>
            </div>
            
        </div>
        <div class="absolute ml-10 text-sm text-gray-500 underline opacity-50 -my-14 hover:text-gray-300">
            <a class="font-sans" href="http://localhost:8000/login">Authorization for the administrator</a>
        </div>
       
    </div>

    
</body>
</html>