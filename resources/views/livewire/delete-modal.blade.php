<div class="fixed start-0 top-0 z-[80] hidden size-full items-center justify-center overflow-y-auto overflow-x-hidden"
    :class="{ 'flex': show, 'hidden': !show }"
    x-data="{ show: false }"
    x-on:open-modal.window="show = true; $wire.set('model', $event.detail.model); $wire.set('modelId', $event.detail.modelId); $wire.set('route', $event.detail.route)"
    x-on:close-modal.window = "show=false">
    <div class="absolute left-0 top-0 z-0 h-full w-full bg-black opacity-50"
        x-on:click="$dispatch('close-modal')"></div>
    <div
        class="m-3 mt-0 transition-all ease-out hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 md:mx-auto md:w-full md:max-w-2xl">
        <div class="relative flex flex-col overflow-hidden rounded-xl border bg-white shadow-sm">
            <div class="absolute end-2 top-2">
                <button
                    class="inline-flex size-8 items-center justify-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                    type="button"
                    x-on:click="$dispatch('close-modal')">
                    <span class="sr-only">Close</span>
                    <svg class="size-4 shrink-0"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>

            <div class="overflow-y-auto p-4 sm:p-10">
                <div class="flex gap-x-4 md:gap-x-7">
                    <!-- Icon -->
                    <span
                        class="inline-flex size-[46px] shrink-0 items-center justify-center rounded-full border-4 border-red-50 bg-red-100 text-red-500 sm:h-[62px] sm:w-[62px]">
                        <svg class="size-5 shrink-0"
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </span>
                    <!-- End Icon -->

                    <div class="grow">
                        <h3 class="mb-2 text-xl font-bold text-gray-800">
                            {{ $title }}
                        </h3>
                        <p class="text-gray-500">
                            {{ $description }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-x-2 border-t bg-gray-50 px-4 py-3">
                <button
                    class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 focus:bg-gray-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                    type="button"
                    x-on:click="$dispatch('close-modal')">
                    Cancel
                </button>
                <button
                    class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-red-500 px-3 py-2 text-sm font-medium text-white hover:bg-red-600 disabled:pointer-events-none disabled:opacity-50"
                    type="button"
                    wire:click="destroy">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
