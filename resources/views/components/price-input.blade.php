<div class="relative">
    <input
        class="block w-full rounded-lg border-gray-200 px-4 py-3 pe-16 ps-12 text-sm shadow-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
        type="text"
        {{ $attributes }}
        placeholder="0.00"
        oninput="formatNumber(this)">
    <div class="pointer-events-none absolute inset-y-0 start-0 z-20 flex items-center ps-4">
        <span class="text-gray-500">Rp</span>
    </div>
    <div class="pointer-events-none absolute inset-y-0 end-0 z-20 flex items-center pe-4">
        <span class="text-gray-500">IDR</span>
    </div>

    <script>
        function formatNumber(input) {
            let value = input.value.replace(/\D/g, '');

            input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }
    </script>
</div>
