<x-public-layout>
    <div class="space-y-8 p-6">
        <x-public.filter-box />

        @if ($search && $tours->isEmpty())
            <p>No Tour Package Found</p>
        @endif

        @if ($tours->isNotEmpty())

            <div class="grid grid-cols-1 gap-4">
                @foreach ($tours as $tour)
                    <x-public.tour-card tourId="{{ $tour->id }}" />
                @endforeach
            </div>
        @else
            @if (!$search)
                <div class="space-y-8">
                    @foreach ($categories as $category)
                        <x-public.tours-slider id="{{ $category->slug }}"
                            categoryId="{{ $category->id }}" />
                    @endforeach
                </div>
            @endif

        @endif
    </div>
</x-public-layout>
