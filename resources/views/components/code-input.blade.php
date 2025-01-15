@props(['disabled' => false])

<div>
    <input id="file-input"
        @disabled($disabled)
        {{ $attributes->merge(['class' => 'block w-full rounded-lg border-gray-200 px-3 py-2 pe-11 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:pointer-events-none disabled:opacity-50']) }}
        {{ $attributes }}
        oninput="formatNumber(this)">

    <script>
        function formatNumber(input) {
            // Remove all non-digit characters
            let value = input.value.replace(/\D/g, '');

            // Format the value by adding a dash after every 4 digits
            value = value.replace(/(\d{4})(?=\d)/g, '$1-');

            // Update the input value with the formatted string
            input.value = value;
        }

        document.addEventListener('DOMContentLoaded', function() {
            let input = document.getElementById('file-input');
            formatNumber(input);
        });
    </script>
</div>
