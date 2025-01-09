<x-app-layout back="{{ route('admin.categories.index') }}">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Bank Account') }}
        </h2>
        <p class="text-sm text-gray-500">Add a new bank account to organize your products and improve the navigation of
            your
            store</p>
    </x-slot>

    <!-- Form Section -->
    <div>
        <form action="{{ route('admin.banks.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <!-- Card -->
            <div class="rounded-xl bg-white shadow">

                <div class="p-4 pt-0 sm:p-7 sm:pt-0">
                    <!-- Grid -->
                    <div class="space-y-4 sm:space-y-6">

                        <div class="space-y-2">
                            <x-input-label for="bank_name"
                                :value="__('Bank name')" />
                            <x-text-input class="mt-1 block w-full"
                                id="bank_name"
                                name="bank_name"
                                type="text"
                                :value="old('bank_name')"
                                autofocus
                                autocomplete="off"
                                placeholder="Bank Centra Asia" />
                            <x-input-error class="mt-2"
                                :messages="$errors->get('bank_name')" />
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="logo"
                                :value="__('Logo')" />
                            <x-single-upload id="logo"
                                name="logo"
                                :value="old('logo')" />
                            <x-input-error class="mt-2"
                                :messages="$errors->get('logo')" />
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="bank_account_name"
                                :value="__('Bank account name')" />
                            <x-text-input class="mt-1 block w-full"
                                id="bank_account_name"
                                name="bank_account_name"
                                type="text"
                                :value="old('bank_account_name')"
                                autofocus
                                autocomplete="off"
                                placeholder="Jhon Doe" />
                            <x-input-error class="mt-2"
                                :messages="$errors->get('bank_account_name')" />
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="bank_account_number"
                                :value="__('Bank account number')" />
                            <x-code-input id="bank_account_number"
                                name="bank_account_number"
                                type="text"
                                :value="old('bank_account_number')"
                                autofocus
                                autocomplete="off"
                                placeholder="123-456-7890" />

                            <x-input-error class="mt-2"
                                :messages="$errors->get('bank_account_number')" />
                        </div>

                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-center gap-x-2">
                        <button
                            class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-indigo-600 px-4 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:bg-indigo-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                            type="submit">
                            Create Bank Account
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
