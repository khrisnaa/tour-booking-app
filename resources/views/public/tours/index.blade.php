<x-public-layout>
    <div class="space-y-8">
        <div>
            <x-public.search-box />
        </div>
        <div class="space-y-4 overflow-hidden">
            <div class="flex gap-2">
                <x-public.category-button :active="false">Beaches</x-public.category-button>
                <x-public.category-button :active="true">Cultural</x-public.category-button>
                <x-public.category-button :active="false">Nature</x-public.category-button>
                <x-public.category-button :active="false">Nightlife</x-public.category-button>
                <x-public.category-button :active="false">Family</x-public.category-button>
            </div>
        </div>

        <div class="space-y-8">

            <x-public.tours-slider id="beaches" />
            <x-public.tours-slider id="cultural" />
            <x-public.tours-slider id="xbow" />

        </div>
    </div>

    @push('scripts')
    @endpush
</x-public-layout>
