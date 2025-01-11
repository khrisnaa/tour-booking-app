<div class="space-y-8">

    <div class="relative z-[1] h-[24rem] overflow-hidden rounded-3xl">
        <div class="img-box absolute inset-0">
            <img class="h-full w-full object-cover"
                src="{{ asset('images/image_7.jpeg') }}" />
        </div>

        <div class="absolute inset-0 z-[2] bg-gradient-to-t from-black via-transparent to-transparent">
        </div>

        <div class="absolute bottom-0 left-0 z-[3] w-full p-4">
            <div class="mb-4 px-4 text-white">
                <p class="text-sm text-white/70">Uluwatu, Badung</p>
                <h3 class="text-lg">Green Bowl Beach</h3>
                <div
                    class="inline-flex items-center gap-x-1.5 rounded-full border border-gray-200 px-3 py-1.5 text-sm font-medium text-white shadow-sm">
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

        <div
            class="icon-box absolute -bottom-1 -right-1 z-[3] h-24 w-24 rounded-tl-[50%] bg-white before:absolute before:-left-5 before:bottom-1 before:h-5 before:w-5 before:rounded-br-3xl before:shadow-[0.25rem_0.25rem_0_0.25rem_white] before:content-[''] after:absolute after:-top-5 after:right-1 after:h-5 after:w-5 after:rounded-br-3xl after:shadow-[0.25rem_0.25rem_0_0.25rem_white] after:content-['']">
            <span
                class="absolute inset-3 flex items-center justify-center rounded-full bg-black text-white transition-transform hover:scale-110">
                <svg class="lucide lucide-arrow-up-right"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M7 7h10v10" />
                    <path d="M7 17 17 7" />
                </svg>
            </span>
        </div>

        <div class="absolute right-2 top-2 z-[3] h-16 w-16">
            <button
                class="flex h-full w-full shrink-0 items-center justify-center gap-2 rounded-full border border-transparent border-white font-medium text-white focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                type="button">
                <svg class="lucide lucide-heart"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <path
                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Second Card --}}
    {{-- <div class="relative h-[24rem] overflow-hidden rounded-3xl">
        <div class="img-box absolute inset-0 z-[1]">
            <img class="h-full w-full object-cover"
                src="{{ asset('images/image_7.jpeg') }}" />
        </div>

        <div class="absolute bottom-0 left-0 z-[3] w-full p-4">
            <div class="mb-4 px-4 text-white">
                <p class="text-sm text-white/70">Uluwatu, Badung</p>
                <h3 class="text-lg">Green Bowl Beach</h3>
                <div
                    class="inline-flex items-center gap-x-1.5 rounded-full border border-gray-200 px-3 py-1.5 text-sm font-medium text-white shadow-sm">
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
            <div class="relative flex h-16 items-center rounded-full bg-white/30 backdrop-blur-lg">
                <span class="w-full text-center text-white">See More</span>
                <span
                    class="absolute right-1 flex h-14 w-14 items-center justify-center rounded-full bg-white text-black transition-transform hover:scale-110">
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
                </span>
            </div>
        </div>

        <div class="absolute inset-0 z-[2] bg-gradient-to-t from-black via-black/40 to-transparent">
        </div>
    </div> --}}

</div>
