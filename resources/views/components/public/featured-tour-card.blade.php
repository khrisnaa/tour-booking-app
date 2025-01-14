<div>
    <a class="relative"
        href="{{ route('tour.details', ['tour' => $tour->slug]) }}">
        <div class="group relative z-[1] h-[22rem] overflow-hidden rounded-3xl">
            <div class="img-box absolute inset-0">
                <img class="h-full w-full scale-110 object-cover transition-transform duration-500 group-hover:scale-100"
                    src="{{ Storage::url($tour->thumbnail) }}" />

                <div
                    class="absolute bottom-0 flex h-0 w-full bg-black/30 backdrop-blur-md transition-all duration-500 group-hover:h-full">
                </div>

                <div class="absolute inset-0 z-[2] bg-gradient-to-t from-black via-transparent to-transparent">
                </div>
            </div>

            <div class="absolute left-0 top-56 z-[3] w-full p-4 transition-all duration-500 group-hover:top-5">
                <div class="mb-6 px-4 text-white">
                    <p class="text-sm text-white/70">{{ $tour->location }}</p>
                    <h3 class="text-lg">{{ $tour->name }}</h3>
                    <div class="mt-2 flex items-center gap-4">
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
                        <span class="text-sm text-gray-200">
                            {{ formatDuration($tour->duration_days, $tour->duration_hours) }}</span>
                    </div>

                </div>
                <div>
                    <p class="px-4 text-xs text-white">
                        {{-- {{ strip_tags($tour->description) }} --}}
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum libero magnam odio
                        omnis,
                        voluptas sunt commodi facere laborum quidem ex quis suscipit doloribus sequi officia consectetur
                        nobis ut optio tempore sed delectus ducimus magni?
                    </p>
                </div>
            </div>

            <div
                class="icon-box absolute -bottom-1 -right-1 z-[3] h-24 w-24 cursor-pointer rounded-tl-[50%] bg-white before:absolute before:-left-5 before:bottom-1 before:h-5 before:w-5 before:rounded-br-3xl before:shadow-[0.25rem_0.25rem_0_0.25rem_white] before:content-[''] after:absolute after:-top-5 after:right-1 after:h-5 after:w-5 after:rounded-br-3xl after:shadow-[0.25rem_0.25rem_0_0.25rem_white] after:content-['']">
                <span
                    class="absolute inset-3 flex items-center justify-center rounded-full bg-black text-white transition-transform duration-500 group-hover:scale-110">
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
        <div class="absolute right-2 top-2 z-[3] h-16 w-16 rounded-full">
            <livewire:like-button :isActive="false" />
        </div>
    </a>
</div>
