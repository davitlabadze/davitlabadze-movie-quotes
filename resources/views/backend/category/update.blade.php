<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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
                <a href="http://localhost:8000/admin/category"><</a>
            </div>
        </div>
        
        <div class="flex justify-center py-36">
            <div class="ml-10">
                <main class="container max-w-lg p-6 mx-auto bg-gray-400 border border-gray-200 rounded-xl">
                    <h1 class="font-bold text-center front-bold-text-xl">Update Category</h1>
                    <form action="{{url('admin/category/'.$category->id)}}" method="POST" class="mt-10" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="mb-6">
                            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="text"> Category_en </label>
                            <input class="w-full p-2 border border-gray-400" type="text" name="category_en" value="{{$category->category_en}}" id="" />
                    
                            @error('category_en')
                                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    
                        <div class="mb-6">
                            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="text"> Category_ka </label>
                            <input class="w-full p-2 border border-gray-400" type="text" name="category_ka"  value="{{$category->category_ka}}"id="" />
                    
                            @error('category_ka')
                                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-4 py-2 text-white bg-green-600 rounded-lg rounderd hover:bg-green-700">Update</button>
                        </div>
                    </form> 
                </main>  
            </div>
    </div>

    
</body>
</html>