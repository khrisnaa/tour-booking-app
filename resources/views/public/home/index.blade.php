<x-public-layout>
    <div class="space-y-8 p-6">
        <div class="px-2">
            <h2 class="text-2xl font-semibold">
                Your Great Escape!🔆
            </h2>
            <h3 class="text-gray-600">
                From Beaches to Peaks, Your Next Adventure Starts Here!
            </h3>
        </div>
        <div>
            <x-public.search-box />
        </div>
        <div class="space-y-4 overflow-hidden">
            <h4 class="text-2xl font-semibold">Where to next?</h4>
            <div class="flex gap-2">
                <x-public.category-button :active="false">Beaches</x-public.category-button>
                <x-public.category-button :active="true">Cultural</x-public.category-button>
                <x-public.category-button :active="false">Nature</x-public.category-button>
                <x-public.category-button :active="false">Nightlife</x-public.category-button>
                <x-public.category-button :active="false">Family</x-public.category-button>
            </div>
        </div>

        <div class="space-y-4">
            {{-- <h4 class="text-2xl font-semibold">Best Deals!</h4> --}}
            {{-- <swiper-container class="mySwiper max-w-96"
                init="false"
                grabCursor="true"
                loop="true">
                @for ($i = 1; $i <= 5; $i++)
                    <swiper-slide> <x-public.promotion-card /></swiper-slide>
                @endfor
            </swiper-container> --}}

        </div>

        <div class="space-y-2">
            <h4 class="text-xl font-semibold">Best Deals Today!</h4>

            <swiper-container class="mySwiper max-w-96"
                init="false"
                grabCursor="true"
                loop="true">
                @foreach ($promoTours as $promoTour)
                    <swiper-slide> <x-public.small-tour-card tourId="{{ $promoTour->id }}" /></swiper-slide>
                @endforeach
            </swiper-container>

        </div>

        <div class="relative w-full space-y-2">
            <h4 class="text-xl font-semibold">Top Recommendations</h4>
            <div class="space-y-4">
                @foreach ($tours as $tour)
                    <x-public.featured-tour-card tourId="{{ $tour->id }}" />
                @endforeach

            </div>
        </div>
        <div>
            <div class="space-y-8">
                <div class="space-y-1 text-center">
                    <h3 class="text-2xl font-semibold">Voices of Our Valued Clients</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="marquee-left">
                    <div class="marquee-content translate-x-[-100%]">
                        @for ($i = 1; $i <= 3; $i++)
                            <x-public.testimonials-card />
                        @endfor
                    </div>
                    <div class="marquee-content translate-x-[-100%]">
                        @for ($i = 1; $i <= 3; $i++)
                            <x-public.testimonials-card />
                        @endfor
                    </div>
                </div>

                <div class="marquee-right">
                    <div class="marquee-content translate-x-[-100%]">
                        @for ($i = 1; $i <= 3; $i++)
                            <x-public.testimonials-card />
                        @endfor
                    </div>
                    <div class="marquee-content translate-x-[-100%]">
                        @for ($i = 1; $i <= 3; $i++)
                            <x-public.testimonials-card />
                        @endfor
                    </div>
                </div>

            </div>
        </div>
        <div>
            <x-public.faqs-section />
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        <script>
            var swiperEl = document.querySelector(".mySwiper");
            Object.assign(swiperEl, {
                slidesPerView: 1.5,
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
            });
            swiperEl.initialize();
        </script>
    @endpush
</x-public-layout>
