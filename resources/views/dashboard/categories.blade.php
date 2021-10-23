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
      

        <div class="flex justify-center py-36">
            <div class="ml-10">
                <main class="container max-w-lg p-6 mx-auto bg-gray-400 border border-gray-200 rounded-xl">
                    <h1 class="font-bold front-bold-text-xl">Links</h1>
                    <hr class="divide-y divide-yellow-500">
                    <div class="mt-2 space-y-2">
                        <h1 class=" front-bold-text-xl"><a href="http://localhost:8000/dashboard/posts">Posts</a></h1>
                        <h1 class="text-gray-100 front-bold-text-xl"><a href="http://localhost:8000/dashboard/categories">Categories</a></h1>
                    </div>
                    <hr class="mt-2">
                    <h1 class="mt-2"><a href="#">Log Out</a></h1>
                </main>  
            </div>


              <div class="flex">
                <div class="-my-2">
                  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="px-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                              Category_en
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                              Category_ka
                            </th>
                           
                            
                            <th scope="col" class="relative px-6 py-3">
                              <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Delete</span>
                              </th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Odd row -->
                          <tr class="bg-white">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                1
                              </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                Father of a Soldier
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                              ჯარისკაცის მამა
                            </td>
                           
                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                              </td>
                          </tr>
                          <tr class="bg-white"> 
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                2
                              </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                Data tutashkhia
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                              დათა თუთაშხია
                            </td>
                            
                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div>
                    <button class="p-2 bg-green-500 rounded-lg hover:bg-green-600"><a href="">Add New Category</a></button>
                   </div>
              </div>
        </div>
        
        
       
       
    </div>

    
</body>
</html>