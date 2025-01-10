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
        <div class="w-full">

            <div class="relative h-[22rem] overflow-hidden rounded-3xl">
                <div class="img-box absolute inset-0">
                    <img class="h-full w-full object-cover"
                        src="{{ asset('images/image_5.jpeg') }}" />
                </div>
                <div
                    class="icon-box absolute -right-1 -top-1 h-24 w-24 rounded-bl-[50%] bg-white before:absolute before:-left-5 before:top-1 before:h-5 before:w-5 before:rounded-tr-3xl before:shadow-[0.25rem_-0.25rem_0_0.25rem_white] before:content-[''] after:absolute after:-bottom-5 after:right-1 after:h-5 after:w-5 after:rounded-tr-3xl after:shadow-[0.25rem_-0.25rem_0_0.25rem_white] after:content-['']">
                    <span
                        class="absolute inset-3 flex items-center justify-center rounded-full bg-black text-white transition-transform hover:scale-110">
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
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
