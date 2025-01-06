<x-app-layout back="{{ route('admin.tour-packages.index') }}">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Update Tour Package') }}
        </h2>
        <p class="text-sm text-gray-500">Update a tour package to organize your offerings and enhance user experience.
        </p>
    </x-slot>

    <!-- Form Section -->
    <div>
        <form action="{{ route('admin.tour-packages.update', $tourPackage) }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <!-- Card -->
            <div class="rounded-xl bg-white shadow">

                <div class="p-4 pt-0 sm:p-7 sm:pt-0">
                    <!-- Grid -->

                    <div class="space-y-4 sm:space-y-6">
                        <div class="space-y-2">
                            <x-input-label for="category"
                                :value="__('Category')" />
                            <x-select-input id="category"
                                name="category_id"
                                :items="$categories"
                                :value="old('category_id', $tourPackage->category_id ?? '')" />
                            <x-input-error class="mt-2"
                                :messages="$errors->get('category')" />
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="name"
                                :value="__('Package name')" />
                            <x-text-input class="mt-1 block w-full"
                                id="name"
                                name="name"
                                type="text"
                                :value="old('name', $tourPackage->name ?? '')"
                                autofocus
                                autocomplete="off"
                                placeholder="Enter package name" />
                            <x-input-error class="mt-2"
                                :messages="$errors->get('name')" />
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="thumbnail"
                                :value="__('Thumbnail')" />
                            <x-single-upload id="thumbanil"
                                name="thumbnail" />
                            <x-input-error class="mt-2"
                                :messages="$errors->get('thumbnail')" />
                        </div>
                        <div class="space-y-2">
                            <x-input-label for="description"
                                :value="__('Package description')" />
                            <x-text-editor id="description"
                                name="description"
                                :value="old('description', $tourPackage->description ?? '')" />
                            <x-input-error class="mt-2"
                                :messages="$errors->get('description')" />
                        </div>

                        <div class="grid grid-cols-2 gap-4">

                            <div class="space-y-2">
                                <x-input-label for="price"
                                    :value="__('Package price')" />
                                <x-price-input id="price"
                                    name="price"
                                    :value="old('price', $tourPackage->price ?? 0)" />
                                <x-input-error class="mt-2"
                                    :messages="$errors->get('price')" />
                            </div>

                            <div class="space-y-2">
                                <x-input-label for="location"
                                    :value="__('Package location')" />
                                <x-text-input class="mt-1 block w-full py-3"
                                    id="location"
                                    name="location"
                                    type="text"
                                    placeholder="Enter package location" />
                                <x-input-error class="mt-2"
                                    :messages="$errors->get('location')" />
                            </div>

                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <x-input-label for="duration days"
                                    :value="__('Package duration days')" />
                                <x-number-input name="duration_days" />
                                <x-input-error class="mt-2"
                                    :messages="$errors->get('duration days')" />
                            </div>

                            <div class="space-y-2">
                                <x-input-label for="duration hours"
                                    :value="__('Package duration hours')" />
                                <x-number-input name="duration_hours" />
                                <x-input-error class="mt-2"
                                    :messages="$errors->get('duration hours')" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="photos"
                                :value="__('Photos')" />

                            <x-multiple-upload id="photos"
                                name="photos[]" />

                            <x-input-error class="mt-2"
                                :messages="$errors->get('photos')" />
                        </div>

                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-center gap-x-2">
                        <button
                            class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-indigo-600 px-4 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:bg-indigo-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                            type="submit">
                            Create Tour Package
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"
            integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/dropzone@6.0.0-beta.2/dist/dropzone-min.js"></script>
    @endpush
</x-app-layout>
