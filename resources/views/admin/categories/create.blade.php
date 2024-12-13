<x-app-layout back="{{ route('admin.categories.index') }}">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create New Category') }}
        </h2>
        <p class="text-sm text-gray-500">Add a new category to organize your products and improve the navigation of your
            store</p>
    </x-slot>

    <!-- Card Section -->
    <div>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <!-- Card -->
            <div class="rounded-xl bg-white shadow">

                <div class="p-4 pt-0 sm:p-7 sm:pt-0">
                    <!-- Grid -->
                    <div class="space-y-4 sm:space-y-6">

                        <div class="space-y-2">
                            <label for="af-submit-app-project-name"
                                class="mt-2.5 inline-block text-sm font-medium text-gray-800">
                                Category name
                            </label>

                            <input id="af-submit-app-project-name" type="text" name="name"
                                class="block w-full rounded-lg border-gray-200 px-3 py-2 pe-11 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
                                placeholder="Enter category name">
                        </div>

                        <div class="space-y-2">
                            <label for="af-submit-app-description"
                                class="mt-2.5 inline-block text-sm font-medium text-gray-800">
                                Category description
                            </label>

                            <textarea id="af-submit-app-description" name="description"
                                class="block w-full rounded-lg border-gray-200 px-3 py-2 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
                                rows="6" placeholder="Enter a brief description of the category, highlighting its key features or purpose."></textarea>
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-center gap-x-2">
                        <button type="submit"
                            class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-4 py-3 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50">
                            Create Category
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </form>
    </div>
    <!-- End Card Section -->

</x-app-layout>
