<a href="{{ route('tour.details', ['tour' => $tour->slug]) }}">
    <div class="relative">
        <div class="group relative z-[1] h-[12rem] overflow-hidden rounded-3xl">
            <div class="img-box absolute inset-0">
                <img class="h-full w-full scale-110 object-cover transition-transform duration-500 group-hover:scale-100"
                    src="{{ Storage::url($tour->thumbnail) }}" />

                <div class="absolute inset-0 z-[2] bg-gradient-to-t from-black via-transparent to-transparent">
                </div>
            </div>

            <div class="absolute bottom-0 left-0 z-[3] w-full p-4 transition-all duration-500">
                <div class="mb-2 px-4 text-white">
                    <p class="text-sm text-gray-100">{{ $tour->location }}</p>
                    <h3 class="text-lg">{{ $tour->name }}</h3>
                    </h3>
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
            <div class="absolute right-1 top-1 z-[3] h-16 w-16 rounded-full">
                <span
                    class="absolute inset-3 flex items-center justify-center rounded-full bg-white text-black transition-transform duration-500 group-hover:rotate-45 group-hover:scale-110">
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
        </div>

    </div>
</a>
