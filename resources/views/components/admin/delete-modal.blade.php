<button type="button"
    class="size-[46px] flex items-center justify-center rounded-lg border border-transparent bg-red-600 px-3 py-4 text-sm font-medium text-white hover:bg-red-700 focus:bg-red-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-danger-alert" data-hs-overlay="#hs-danger-alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-trash">
        <path d="M3 6h18" />
        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
    </svg>
</button>

<div id="hs-danger-alert"
    class="hs-overlay size-full fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden" role="dialog"
    tabindex="-1" aria-labelledby="hs-danger-alert-label">
    <div
        class="0 m-3 mt-0 flex min-h-[calc(100%-3.5rem)] items-center opacity-0 transition-all ease-out hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 md:mx-auto md:w-full md:max-w-2xl">
        <div class="relative my-auto flex flex-col overflow-hidden rounded-xl border bg-white shadow-sm">
            <div class="absolute end-2 top-2">
                <button type="button"
                    class="size-8 inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                    aria-label="Close" data-hs-overlay="#hs-danger-alert">
                    <span class="sr-only">Close</span>
                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
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
                        class="size-[46px] inline-flex shrink-0 items-center justify-center rounded-full border-4 border-red-50 bg-red-100 text-red-500 sm:h-[62px] sm:w-[62px]">
                        <svg class="size-5 shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </span>
                    <!-- End Icon -->

                    <div class="grow">
                        <h3 id="hs-danger-alert-label" class="mb-2 text-xl font-bold text-gray-800">
                            {{ $title }}
                        </h3>
                        <p class="text-gray-500">
                            {{ $description }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-x-2 border-t bg-gray-50 px-4 py-3">
                <button type="button"
                    class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 focus:bg-gray-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                    data-hs-overlay="#hs-danger-alert">
                    Cancel
                </button>
                <form action="{{ $actionUrl }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-red-500 px-3 py-2 text-sm font-medium text-white hover:bg-red-600 disabled:pointer-events-none disabled:opacity-50">
                        {{ $actionText }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
