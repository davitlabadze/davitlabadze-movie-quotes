@foreach (config('app.available_locales') as $locale)
    <div class="w-12 h-12 px-3 py-3 text-sm text-center  @if (app()->getLocale() != $locale) bg-gray-50 @else text-white @endif bg-transparent  border-2 rounded-full cursor-pointer">
        <a href="{{ request()->url() }}?language={{ $locale }} ">{{ strtoupper($locale) }}</a>
    </div>
@endforeach
