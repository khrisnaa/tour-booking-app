<x-public-layout>
    <div class="relative w-full space-y-4">
        <h4 class="text-2xl font-bold">Your Favorites</h4>
        <div class="space-y-4">
            @for ($i = 1; $i <= 3; $i++)
                <x-public.featured-tour-card />
            @endfor
        </div>
    </div>
</x-public-layout>
