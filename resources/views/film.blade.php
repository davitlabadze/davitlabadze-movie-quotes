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
    <div class="absolute py-96 px-12 space-y-3">
        <div class=" 
        rounded-full 
        h-12 
        w-12  
        py-3
        px-3
        border-2 
        cursor-pointer
        bg-transparent  
        text-sm
        text-center 
        text-white
        ">
            <a href="">EN</a>
        </div>
        <div class=" 
        rounded-full 
        h-12 
        w-12  
        py-3
        px-3 
        bg-gray-50 cursor-pointer
        border-2
        text-center text-sm
        ">
            <a href="">KA</a>
        </div>
    </div>


    <div class="py-36 justify-center">
        <div class="flex ml-96 -mt-20">
        <h1 class="text-5xl text-white ml-40">Father of a Soldier</h1>

        </div>
        <div class="flex justify-center m-14">
            <div class="rounded-lg bg-white">
                <div class=" h-96">
                    <img class="h-full w-full object-cover rounded" src="./img/solder.jpg" alt="" >
                </div>
                <h1 class="py-16 text-center text-black text-5xl">“What should I tell you your mother?!”</h1> 
            </div>
        </div>
        <div class="flex justify-center m-14">
            <div class="rounded-lg bg-white">
                <div class=" h-96">
                    <img class="h-full w-full object-cover rounded" src="./img/grapes.jpg" alt="" >
                </div>
                <h1 class="py-16 text-center text-black text-5xl">“When did you get here?”</h1> 
            </div>
        </div>
    </div>

</div>
</body>
</html>