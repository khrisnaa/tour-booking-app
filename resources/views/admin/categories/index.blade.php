<x-app-layout>

    @push('styles')
        @livewireStyles
    @endpush

    @push('scripts')
        @livewireScripts
    @endpush

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Categories Overview') }}
        </h2>
        <p class="text-sm text-gray-500">View, manage, and organize all product categories in one place</p>
    </x-slot>

    <!-- Table Section -->
    <div>
        <livewire:delete-modal
            title="Confirm Deletion"
            description="Are you sure you want to delete this category? This action cannot be undone. All associated data will be permanently removed."
        />

        <livewire:category-table />
    </div>

    <!-- End Table Section -->

</x-app-layout>
