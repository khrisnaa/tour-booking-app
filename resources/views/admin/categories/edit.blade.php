<x-app-layout back="{{ route('admin.categories.index') }}">
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    {{ __('Edit Category') }}
                </h2>
                <p class="text-sm text-gray-500">Update the details of the selected category to keep your product
                    offerings
                    organized and accurate</p>
            </div>
            <div>
                <x-admin.delete-modal
                    title="Delete Category"
                    description="Are you sure you want to permanently delete this category? This action is irreversible."
                    actionText="Delete Category"
                    actionUrl="{{ route('admin.categories.destroy', $category) }}"
                />
            </div>
        </div>
    </x-slot>

    <!-- Form Section -->
    <div>
        <form
            action="{{ route('admin.categories.update', $category) }}"
            method="POST"
        >
            @csrf
            @method('PUT')
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
                                :value="old('name', $category->name ?? '')"
                                autocomplete="off"
                                placeholder="Enter category name"
                            />
                            <x-input-error
                                class="mt-2"
                                :messages="$errors->get('name')"
                            />
                        </div>

                        {{-- <div class="space-y-2">
                            <x-input-label for="description" :value="__('Category description')" />
                            <textarea id="description" name="description"
                                class="block w-full rounded-lg border-gray-200 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:pointer-events-none disabled:opacity-50"
                                rows="6" placeholder="Enter a brief description of the category, highlighting its key features or purpose.">{{ old('description', $category->description ?? '') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div> --}}

                        <div class="space-y-2">
                            <x-input-label
                                for="description"
                                :value="__('Category description')"
                            />
                            <x-text-editor
                                id="description"
                                name="description"
                                :value="old('description', $category->description ?? '')"
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
                            Update Category
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
