<div class="space-y-4">
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="inline-block min-w-full p-1.5 align-middle">
                <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                    <!-- Header -->
                    <div
                        class="grid gap-3 border-b border-gray-200 px-6 py-4 md:flex md:items-center md:justify-between">
                        <div class="relative w-full max-w-xs">
                            <label class="sr-only">Search</label>
                            <input
                                class="block w-full rounded-lg border-gray-200 px-3 py-2 ps-9 text-sm shadow-sm focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 disabled:pointer-events-none disabled:opacity-50"
                                id="hs-table-with-pagination-search"
                                name="search"
                                type="text"
                                wire:model.live.debounce.300ms="search"
                                autocomplete="off"
                                placeholder="Search for items">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                <svg class="size-4 text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="11"
                                        cy="11"
                                        r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                            </div>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <a class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700 focus:bg-indigo-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                    href="{{ route('admin.tour-packages.create') }}">
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
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    Create
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">

                            <tr>
                                <th class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-800"
                                    scope="col">
                                    No
                                </th>
                                <th class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-800"
                                    scope="col">
                                    Package name
                                </th>
                                <th class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-800"
                                    scope="col">
                                    Thumbnail
                                </th>

                                <th class="whitespace-nowrap px-6 py-3 text-start text-xs font-medium uppercase text-gray-800"
                                    scope="col">
                                    Price
                                </th>
                                <th class="whitespace-nowrap px-6 py-3 text-start text-xs font-medium uppercase text-gray-800"
                                    scope="col">
                                    Duration
                                </th>
                                <th class="whitespace-nowrap px-6 py-3 text-start text-xs font-medium uppercase text-gray-800"
                                    scope="col">
                                    Location
                                </th>
                                <th class="px-6 py-3 text-end text-xs font-medium uppercase text-gray-800"
                                    scope="col">
                                </th>

                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">

                            @forelse ($tours as $index => $tour)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-600">
                                        {{ str_pad($tours->firstItem() + $index, 2, '0', STR_PAD_LEFT) }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-600">
                                        {{ $tour->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-600">
                                        <img class="h-10 w-10 rounded"
                                            src="{{ Storage::url($tour->thumbnail) }}"
                                            alt="Thumbnail" />
                                    </td>

                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                        {{ formatPrice($tour->price) }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                        {{ formatDuration($tour->duration_days, $tour->duration_hours) }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                        {{ $tour->location }}
                                    </td>
                                    <td class="space-x-4 whitespace-nowrap px-9 py-4 text-end text-sm font-medium">
                                        <button
                                            class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-blue-600 hover:text-blue-800 focus:text-blue-800 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                            type="button">
                                            Edit
                                        </button>
                                        <button
                                            class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-red-600 hover:text-red-800 focus:text-red-800 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                            type="button">
                                            Delete
                                        </button>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-600">
                                        Empty
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div class="h-16 border-t border-gray-200 px-6 py-4 md:flex md:items-center md:justify-end">
                        {{ $tours->links('vendor.livewire.tailwind') }}
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
</div>
