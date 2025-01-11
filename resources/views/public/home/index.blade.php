<x-public-layout>
    <div class="space-y-6">
        <div class="px-2">
            <h2 class="text-2xl font-bold">
                Dream Travel🔆
            </h2>
            <h3 class="text-gray-500">
                From beaches to peaks!
            </h3>
        </div>
        <div>
            <x-public.search-box />
        </div>
        <div class="space-y-2 overflow-hidden">
            <h4 class="text-xl font-bold">Where to next?</h4>
            <div class="flex gap-2">
                <x-public.category-button :active="false">Beaches</x-public.category-button>
                <x-public.category-button :active="true">Cultural</x-public.category-button>
                <x-public.category-button :active="false">Nature</x-public.category-button>
                <x-public.category-button :active="false">Nightlife</x-public.category-button>
                <x-public.category-button :active="false">Family</x-public.category-button>
            </div>
        </div>
        <div class="space-y-2">
            <h4 class="text-xl font-bold">Promotions</h4>
            <swiper-container class="mySwiper max-w-96"
                init="false"
                grabCursor="true"
                loop="true">
                @for ($i = 1; $i <= 5; $i++)
                    <swiper-slide> <x-public.promotion-card /></swiper-slide>
                @endfor
            </swiper-container>

        </div>
        <div class="relative w-full space-y-2">
            <h4 class="text-xl font-bold">Trip recommendations</h4>
            <div class="space-y-4">
                @for ($i = 1; $i <= 3; $i++)
                    <x-public.featured-tour-card />
                @endfor
            </div>

        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        <script>
            var swiperEl = document.querySelector(".mySwiper");
            Object.assign(swiperEl, {
                effect: "creative",
                creativeEffect: {
                    prev: {
                        shadow: true,
                        translate: [0, 0, -400],
                    },
                    next: {
                        translate: ["100%", 0, 0],
                    },
                }
            });
            swiperEl.initialize()
        </script>
    @endpush
</x-public-layout>
