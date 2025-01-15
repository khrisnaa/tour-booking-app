<a class="{{ request()->is('category/' . $slug) ? 'bg-black text-white' : 'bg-white text-black' }} inline-flex items-center rounded-full border border-gray-200 px-4 py-2 text-sm font-medium text-black shadow-sm"
    type="button"
    href="{{ route('category', ['category' => $slug]) }}">{{ $slot }}</a>
