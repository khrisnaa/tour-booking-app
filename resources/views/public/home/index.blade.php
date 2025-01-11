<x-public-layout>
    <div class="space-y-4">
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
        <div class="relative w-full">
            <swiper-container class="mySwiper max-w-96"
                init="false"
                grabCursor="true"
                loop="true">
                <swiper-slide><x-public.featured-tour-card /></swiper-slide>
                <swiper-slide><x-public.featured-tour-card /></swiper-slide>
                <swiper-slide><x-public.featured-tour-card /></swiper-slide>
                <swiper-slide><x-public.featured-tour-card /></swiper-slide>
                <swiper-slide><x-public.featured-tour-card /></swiper-slide>
            </swiper-container>

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
