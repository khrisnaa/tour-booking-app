<div class="relative w-full space-y-4">
    <h4 class="text-2xl font-bold">Beaches</h4>
    <swiper-container class="mySwiper relative max-w-96"
        id="{{ $id }}"
        init="false"
        grabCursor="true"
        loop="true">

        @for ($i = 1; $i <= 5; $i++)
            <swiper-slide> <x-public.tour-card /></swiper-slide>
        @endfor

        <div class="absolute left-0 top-1/2 z-50 flex h-6 w-6 -translate-y-1/2 items-center justify-center rounded-full text-white"
            id="swiper-button-prev{{ $id }}">
            <svg class="lucide lucide-chevron-left"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m15 18-6-6 6-6" />
            </svg>
        </div>
        <div class="absolute right-0 top-1/2 z-50 flex h-6 w-6 -translate-y-1/2 items-center justify-center rounded-full text-white"
            id="swiper-button-next{{ $id }}">
            <svg class="lucide lucide-chevron-right"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </div>

    </swiper-container>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script>
        var swiperEl = document.querySelector("#{{ $id }}");
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
            },
            navigation: {
                nextEl: ".swiper-button-next-{{ $id }}",
                prevEl: ".swiper-button-prev-{{ $id }}",
            }
        });
        swiperEl.initialize()
    </script>
</div>
