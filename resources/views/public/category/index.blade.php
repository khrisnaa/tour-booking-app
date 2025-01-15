<x-public-layout>
    <x-public.filter-box />

    @if ($tours && $tours->isNotEmpty())
        @forelse ($tours as $tour)
            <x-public.tour-card tourId="{{ $tour->id }}" />
        @empty
            <p>No Tour Package Found</p>
        @endforelse
    @endif

</x-public-layout>
