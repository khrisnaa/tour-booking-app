<x-public-layout>
    <div>
        <div class="relative h-[40vh] w-full">

            <button
                class="absolute left-4 top-4 z-[3] flex size-[46px] shrink-0 items-center justify-center gap-2 rounded-full border border-transparent bg-white text-sm font-medium text-black focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                type="button">
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
            </button>

            <img class="z-[2] h-full w-full scale-110 object-cover transition-transform duration-500 group-hover:scale-100"
                src="{{ asset('images/image_7.jpeg') }}" />
        </div>
        <div class="-translate-y-5 space-y-8 rounded-t-3xl bg-white">
            <div class="flex w-full justify-center gap-4 p-4 px-8">
                <div class="relative h-16 w-16 overflow-hidden rounded-md">
                    <img class="h-full w-full scale-110 object-cover transition-transform duration-500 group-hover:scale-100"
                        src="{{ asset('images/image_7.jpeg') }}" />
                    <div class="absolute inset-0 hidden bg-black/50"></div>
                </div>
                <div class="relative h-16 w-16 overflow-hidden rounded-md">
                    <img class="h-full w-full scale-110 object-cover transition-transform duration-500 group-hover:scale-100"
                        src="{{ asset('images/image_7.jpeg') }}" />
                </div>
                <div class="relative h-16 w-16 overflow-hidden rounded-md">
                    <img class="h-full w-full scale-110 object-cover transition-transform duration-500 group-hover:scale-100"
                        src="{{ asset('images/image_7.jpeg') }}" />
                </div>
                <div class="relative h-16 w-16 overflow-hidden rounded-md">
                    <img class="h-full w-full scale-110 object-cover transition-transform duration-500 group-hover:scale-100"
                        src="{{ asset('images/image_7.jpeg') }}" />
                </div>
            </div>

            <div class="space-y-8">

                <div class="flex items-start justify-between px-6">
                    <div>
                        <h4 class="text-2xl font-bold">Green Bowl Beach</h4>
                        <p class="flex items-center gap-1 text-black"><span>
                                <svg class="lucide lucide-map-pin"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12"
                                        cy="10"
                                        r="3" />
                                </svg></span>Nusa Dua, Bali</p>
                    </div>
                    <div>
                        <div
                            class="inline-flex items-center gap-x-1.5 rounded-full border border-gray-600 px-3 py-1.5 text-sm font-medium text-black shadow-sm">
                            <svg class="lucide lucide-star"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                            </svg>
                            <span>5.0</span>
                        </div>
                    </div>
                </div>

                <div class="px-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptatem placeat sapiente
                        repellat accusamus rerum aperiam tempora aut quis autem?</p>
                </div>

                <div class="space-y-2 px-6">
                    <h4 class="text-xl font-semibold">Other Like This</h4>
                    <div class="flex gap-4">
                        <x-public.small-tour-card />
                        <x-public.small-tour-card />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bottom-0 left-0 z-50 w-full">
        <div class="flex h-20 w-full items-center justify-between bg-black p-2 px-4 text-white">
            <div>
                <p>Price</p>
                <h4 class="text-lg font-bold">IDR 300.000 <span class="text-base font-normal">/person</span></h4>
            </div>
            <button
                class="inline-flex items-center gap-x-2 rounded-full border border-gray-200 bg-white px-4 py-3 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 focus:bg-gray-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                type="button">
                Book Now
                <svg class="lucide lucide-arrow-right"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</x-public-layout>
