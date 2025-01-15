<li>
    <a class="{{ $active ? 'bg-gray-100' : '' }} flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-700 hover:bg-gray-100"
        href="{{ $href }}">
        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            {!! $icon !!}
        </svg>
        {{ $text }}
    </a>
</li>
