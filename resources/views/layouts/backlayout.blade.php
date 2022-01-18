<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dashboard</title>
    @if (!Session::has('adminData'))
        <script>
            window.location.href="{{ url('admin/login') }}"
        </script>
    @endif
</head>
<body>
    <div>
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
        <div class="flex flex-col flex-1 min-h-0 bg-gray-800">
            <div class="flex items-center flex-shrink-0 h-16 px-4 bg-gray-900">
                <h1 class="text-xl font-bold text-white">Adminpanel</h1>
            </div>
            <div class="flex flex-col flex-1 overflow-y-auto">
                <nav class="flex-1 px-2 py-4 space-y-1">
                    <div class="flex items-center px-2 py-2 text-sm font-medium text-gray-500">
                        CORE
                    </div>
                    <a href="{{ route('dashboard') }}" class="flex items-center px-2 py-2 text-sm font-medium text-white bg-gray-900 rounded-md group">

                        <img src="{{ asset('img/home.svg') }}" class="flex-shrink-0 w-6 h-6 mr-3" alt="home">
                    Dashboard
                    </a>
                    <a href="{{ route('home') }}" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group" target="_blank">
                        <img src="{{ asset('img/global.svg') }}" class="flex-shrink-0 w-6 h-6 mr-3" alt="global">
                    View Website
                    </a>
                    <div class="flex items-center px-2 py-2 text-sm font-medium text-gray-500">
                        INTERFACE
                    </div>
                    <a href="{{ route('movies.index') }}" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <img src="{{ asset('img/movies.svg') }}" class="flex-shrink-0 w-6 h-6 mr-3" alt="movies">
                    Movies
                    </a>
                    <a href="{{ route('quotes.index') }}" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <img src="{{ asset('img/quotes.svg') }}" class="flex-shrink-0 w-6 h-6 mr-3" alt="quotes">

                    Quotes
                    </a>
                </nav>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:pl-64">
      <div class="sticky top-0 z-10 flex flex-shrink-0 h-16 bg-white shadow">
        <div class="flex justify-between flex-1 px-4">
          <div class="flex flex-1 mt-4">Dashboard</div>
          <div class="flex items-center ml-4 md:ml-6">
            <div class="relative ml-3">
              <div>
                <a  href="{{ route('logout') }}" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                    <img src="{{ asset('img/logout.svg') }}"  class="flex-shrink-0 w-6 h-6 text-gray-500" alt="">
                Log Out
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <main class="w-full p-16 mx-auto mt-2 bg-gray-100 border border-gray-200 rounded-xl">
        <div class="w-full">
            @yield('content')
        </div>
      </main>
    </div>
  </div>
</body>
</html>







