<a href="{{ route('tour.details', ['tour' => $tour->slug]) }}">
    <div class="relative h-[12rem] w-full min-w-[12rem] overflow-hidden rounded-3xl">
        <div class="img-box absolute inset-0 z-[1]">
            <img class="h-full w-full object-cover"
                src="{{ Storage::url($tour->thumbnail) }}" />
        </div>

        <div class="absolute bottom-0 left-0 z-[3] w-full space-y-2 p-4">
            <div class="z-[3] text-white">
                <p class="text-sm text-white/70">{{ $tour->location }}</p>
                <h3 class="">{{ $tour->name }}</h3>
            </div>
            <div class="relative flex h-12 items-center rounded-full bg-black/30 backdrop-blur-lg">
                <span class="w-full text-center text-sm text-white">Book Now</span>
                <span
                    class="absolute right-2 flex h-8 w-8 items-center justify-center rounded-full bg-white text-black transition-transform hover:scale-110">
                    <svg class="lucide lucide-chevron-right"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </span>
            </div>
        </div>

        <div class="absolute inset-0 z-[2] bg-gradient-to-b from-black/30 via-transparent to-black/30">
        </div>
    </div>
</a>
