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
    <livewire:category-table />
    <!-- End Table Section -->
    </div>

</x-app-layout>
