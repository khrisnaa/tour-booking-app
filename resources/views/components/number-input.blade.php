<!-- Input Number -->
<div class="rounded-lg border border-gray-200 bg-white px-3 py-2"
    data-hs-input-number='{
    "min": 0,
    "max": 60
  }'>
    <div class="flex w-full items-center justify-between gap-x-3">
        <input
            class="w-full border-0 bg-transparent p-0 text-gray-800 focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
            data-hs-input-number-input=""
            type="number"
            aria-roledescription="Number field"
            style="-moz-appearance: textfield;"
            {{ $attributes }}
            oninput="removeLeadingZero(this)">
        <div class="flex items-center justify-end gap-x-1.5">
            <button
                class="inline-flex size-6 items-center justify-center gap-x-2 rounded-full border border-gray-200 bg-white text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 focus:bg-gray-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                data-hs-input-number-decrement=""
                type="button"
                aria-label="Decrease"
                tabindex="-1">
                <svg class="size-3.5 shrink-0"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                </svg>
            </button>
            <button
                class="inline-flex size-6 items-center justify-center gap-x-2 rounded-full border border-gray-200 bg-white text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 focus:bg-gray-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                data-hs-input-number-increment=""
                type="button"
                aria-label="Increase"
                tabindex="-1">
                <svg class="size-3.5 shrink-0"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                </svg>
            </button>
        </div>
    </div>

    <script>
        function removeLeadingZero(input) {
            let value = input.value;

            // Menghapus nol di depan
            value = value.replace(/^0+/, '');

            // Pastikan setidaknya ada satu digit
            if (value === '') {
                value = '0';
            }

            input.value = value;
        }
    </script>
</div>
<!-- End Input Number -->
