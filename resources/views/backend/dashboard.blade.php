@extends('layouts.backlayout')
@section('content')
<div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
    <div class="relative flex items-center px-6 py-5 space-x-3 bg-red-500 border rounded-lg shadow-sm hover:bg-red-600">
      <div class="flex-shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg"class="flex-shrink-0 w-6 h-6 mr-3 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
        </svg>
      </div>
      <div class="flex-1 min-w-0">
        <a href="{{ route('category.index') }}" class="focus:outline-none">
          <p class="text-sm font-medium text-white">
            All Categories
          </p>
          <p class="text-sm text-white truncate">
              total:
            {{\App\Models\Category::count()}}
          </p>
        </a>
      </div>
    </div>
    <div class="relative flex items-center px-6 py-5 space-x-3 bg-blue-500 border rounded-lg shadow-sm hover:bg-blue-600">
        <div class="flex-shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-white "fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
        </div>
        <div class="flex-1 min-w-0">
          <a href="{{ route('post.index') }}" class="focus:outline-none">
            <p class="text-sm font-medium text-white">
              All Posts
            </p>
            <p class="text-sm text-white truncate">
                total:
              {{\App\Models\Post::count()}}
            </p>
          </a>
        </div>
    </div>
</div>
<div class="flex py-3 mt-10 "><svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-black "fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
</svg>Recent Posts
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
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Quotes_en
            </th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Quotes_ka
            </th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
               Image
            </th>
          </tr>
    </thead>
    <tbody>
        <tr class="bg-white">
            @foreach($posts as $post)
                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                    {{ $post->id }}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                    {{ $post->category->category_en }}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                    {{ $post->category->category_ka }}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                    {{ $post->quote_en }}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                    {{ $post->quote_ka }}
                </td>
                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                <img src="{{ asset('storage/'. $post->thumbnail) }}" width="64" height="64" alt="image">
                </td>
            @endforeach
        </tr>
    </tbody>
</div>
@endsection
