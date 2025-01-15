<div class="grid grid-cols-4 gap-2">
    @foreach ($tourPackage->tourPhotos as $photo)
        <div class="relative mt-2 rounded-xl border border-gray-200 bg-white p-2">
            <img class="mb-2 aspect-square max-h-64 w-full rounded-lg object-cover"
                src="{{ Storage::url($photo->photo) }}"
                alt="Tour Photo">
            <div class="mb-1 flex items-center justify-end gap-x-3 whitespace-nowrap">
                <div class="flex items-center gap-x-2">
                    <button class="text-gray-500 hover:text-gray-800 focus:text-gray-800 focus:outline-none"
                        data-hs-file-upload-remove=""
                        type="button"
                        wire:click="deletePhoto('{{ $photo->id }}')">
                        <svg class="size-3.5 shrink-0"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10"
                                x2="10"
                                y1="11"
                                y2="17"></line>
                            <line x1="14"
                                x2="14"
                                y1="11"
                                y2="17"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endforeach

</div>
