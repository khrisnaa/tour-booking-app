<button
    class="{{ $active ? 'bg-white text-black' : 'text-white' }} flex size-[46px] shrink-0 items-center justify-center gap-2 rounded-full border border-transparent text-sm font-medium focus:outline-none disabled:pointer-events-none disabled:opacity-50"
    type="button">
    {{ $slot }}
</button>
