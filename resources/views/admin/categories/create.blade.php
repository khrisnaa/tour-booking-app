<x-app-layout back="{{ route('admin.categories.index') }}">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create New Category') }}
        </h2>
        <p class="text-sm text-gray-500">Add a new category to organize your products and improve the navigation of your
            store</p>
    </x-slot>

    <!-- Form Section -->
    <div>
        <form
            action="{{ route('admin.categories.store') }}"
            method="POST"
        >
            @csrf
            <!-- Card -->
            <div class="rounded-xl bg-white shadow">

                <div class="p-4 pt-0 sm:p-7 sm:pt-0">
                    <!-- Grid -->
                    <div class="space-y-4 sm:space-y-6">

                        <div class="space-y-2">
                            <x-input-label
                                for="name"
                                :value="__('Category name')"
                            />
                            <x-text-input
                                class="mt-1 block w-full"
                                id="name"
                                name="name"
                                type="text"
                                :value="old('name')"
                                autofocus
                                autocomplete="off"
                                placeholder="Enter category name"
                            />
                            <x-input-error
                                class="mt-2"
                                :messages="$errors->get('name')"
                            />
                        </div>

                        <div class="space-y-2">
                            <x-input-label
                                for="description"
                                :value="__('Category description')"
                            />
                            <x-text-editor
                                id="description"
                                name="description"
                            />
                            <x-input-error
                                class="mt-2"
                                :messages="$errors->get('description')"
                            />
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-center gap-x-2">
                        <button
                            class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-indigo-600 px-4 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:bg-indigo-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                            type="submit"
                        >
                            Create Category
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </form>
    </div>
    <!-- End Form Section -->

    @push('scripts')
        @vite('resources/js/tiptap.js')
    @endpush
</x-app-layout>
