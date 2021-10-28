@extends('layouts.backlayout')
@section('content')
<div class="flex p-2 mb-10 -mt-12">
    <p class="flex p-2"><svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
      </svg>All Posts</p>
    <button class="flex p-2 text-white bg-green-500 hover:bg-green-600 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg> <a href="{{ route('post.create') }}">Create Data</a>
    </button>
</div>
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
        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
            Quotes_en
        </th>
        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
            Quotes_ka
        </th>
        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
           Image
        </th>
        <th scope="col" colspan="2" class="px-2 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase ">
            <span class="">Action</span>
          </th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
        <tr class="bg-white">
            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                {{ $post->id }}
            </td>
            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                {{  $post->category->category_en }}
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
            <img src="{{ asset('storage/'. $post->thumbnail) }}" width="64" height="64" alt="">
            </td>
            <td class="text-sm font-medium text-right whitespace-nowrap">
                <form action="{{ route('post.edit',['post'=>$post->id])}}">
                    <button class="text-indigo-600 hover:text-indigo-900"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500 hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                      </svg></button>
                </form>
            </td>
            <td class="text-sm font-medium text-center whitespace-nowrap">
                <form  action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-indigo-600 hover:text-indigo-900"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-500 hover:text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg></button>
                  </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
