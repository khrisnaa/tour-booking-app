<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Categories Overview') }}
        </h2>
        <p class="text-sm text-gray-500">View, manage, and organize all product categories in one place</p>
    </x-slot>

    <!-- Table Section -->
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
                                <input type="text" name="hs-table-with-pagination-search"
                                    id="hs-table-with-pagination-search"
                                    class="block w-full rounded-lg border-gray-200 px-3 py-2 ps-9 text-sm shadow-sm focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 disabled:pointer-events-none disabled:opacity-50"
                                    placeholder="Search for items">
                                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                    <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700 focus:bg-indigo-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                        href="{{ route('admin.categories.create') }}">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-800">No</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-800">
                                        Category name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-800">
                                        Category description</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium uppercase text-gray-800">
                                    </th>

                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @forelse ($categories as $category)
                                    <tr>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-600">
                                            01</td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                            {{ $category->name }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                            {{ Str::limit($category->description, 100) }}</td>
                                        <td class="space-x-4 whitespace-nowrap px-9 py-4 text-end text-sm font-medium">
                                            <a href="{{ route('admin.categories.edit', $category) }}"
                                                class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-indigo-600 hover:text-indigo-800 focus:text-indigo-800 focus:outline-none disabled:pointer-events-none disabled:opacity-50">Edit</a>
                                            <button type="button"
                                                class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-red-600 hover:text-red-800 focus:text-red-800 focus:outline-none disabled:pointer-events-none disabled:opacity-50">Delete</button>
                                        </td>
                                    </tr>
                                @empty
                                    <p>No categories found</p>
                                @endforelse

                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="grid gap-3 border-t border-gray-200 px-6 py-4 md:flex md:items-center md:justify-between">
                            <div>
                                <p class="text-sm text-gray-600">
                                    <span class="font-semibold text-gray-800">6</span> results
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button"
                                        class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 focus:bg-gray-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50">
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m15 18-6-6 6-6" />
                                        </svg>
                                        Prev
                                    </button>

                                    <button type="button"
                                        class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 focus:bg-gray-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50">
                                        Next
                                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
    </div>

</x-app-layout>
