@extends('layouts.backlayout')
@section('content')
<div class="flex p-2 mb-10 -mt-12">
    <p class="flex p-2">
        <img class="flex-shrink-0 w-6 h-6 mr-3" src="{{ asset('img/table.svg') }}" alt="table">
        All Quotes</p>
    <button class="flex p-2 text-white bg-green-500 hover:bg-green-600 rounded-xl">
        <img src="{{ asset('img/plus.svg') }}" class="w-6 h-6" alt="plus">
        <a href="{{ route('quotes.create') }}">Create Data</a>
    </button>
</div>
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
            Id
        </th>
        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
          Movies_en
        </th>
        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
          Movies_ka
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
            @foreach (config('app.available_locales') as $locale)
            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                {{ $post->category->getTranslation('movie',$locale) }}
            </td>
            @endforeach
            @foreach (config('app.available_locales') as $locale)
            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                {{ $post->getTranslation('quote',$locale) }}
            </td>
            @endforeach
            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                <img src="{{ asset('storage/'. $post->thumbnail) }}" width="64" height="64" alt="">
            </td>
            <td class="text-sm font-medium text-right whitespace-nowrap">
                <form action="{{ route('quotes.edit',['quote'=>$post->id])}}">
                    <button>
                        <img src="{{ asset('img/pen.svg') }}" class="w-6 h-6" alt="edit-pen">
                    </button>
                </form>
            </td>
            <td class="text-sm font-medium text-center whitespace-nowrap">
                <form  action="{{ route('quotes.destroy', ['quote' => $post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>
                        <img src="{{ asset('img/delete.svg') }}"  class="w-6 h-6" alt="delete">
                    </button>
                </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
<div>
    {{ $posts->links() }}
</div>
@endsection
