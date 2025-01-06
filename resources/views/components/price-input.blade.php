<div class="relative">
    <input
        class="block w-full rounded-lg border-gray-200 px-4 py-3 pe-16 ps-12 text-sm shadow-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
        id="price-input"
        type="text"
        {{ $attributes }}
        autocomplete="off"
        placeholder="0.00"
        oninput="formatNumber(this)"
        onchange="updateHiddenInput()">
    <div class="pointer-events-none absolute inset-y-0 start-0 z-20 flex items-center ps-4">
        <span class="text-gray-500">Rp</span>
    </div>
    <div class="pointer-events-none absolute inset-y-0 end-0 z-20 flex items-center pe-4">
        <span class="text-gray-500">IDR</span>
    </div>

    <!-- Hidden Input for Form Submission -->
    <input id="price-numeric"
        name="price"
        type="hidden">

    <script>
        function formatNumber(input) {
            let value = input.value.replace(/\D/g, ''); // Hapus semua karakter non-digit
            input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Format dengan titik
        }

        function updateHiddenInput() {
            // Ambil nilai dari input yang diformat
            let formattedValue = document.getElementById('price-input').value;
            // Hapus titik untuk mendapatkan angka yang benar
            let numericValue = formattedValue.replace(/\D/g, '');
            // Kirimkan nilai numerik ke input tersembunyi
            document.getElementById('price-numeric').value = numericValue;
        }

        document.addEventListener('DOMContentLoaded', function() {
            let input = document.getElementById('price-input');
            formatNumber(input);
            updateHiddenInput();
        });
    </script>
</div>
