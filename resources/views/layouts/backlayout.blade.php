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
                        <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    Dashboard
                    </a>
                    <a href="{{ route('home') }}" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    View Website
                    </a>
                    <div class="flex items-center px-2 py-2 text-sm font-medium text-gray-500">
                        INTERFACE
                    </div>
                    <a href="{{ route('category.index') }}" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <svg xmlns="http://www.w3.org/2000/svg"class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    Movies
                    </a>
                    <a href="{{ route('post.index') }}" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg>
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







