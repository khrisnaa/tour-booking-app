<div>
    <input
        class="block w-full rounded-lg border border-gray-200 text-sm shadow-sm file:me-4 file:border-0 file:bg-gray-50 file:px-4 file:py-3 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
        id="file-input"
        name="{{ $name }}"
        type="file"
        onchange="previewImage(event)">

    <div class="{{ $value ? '' : 'hidden' }} relative mt-2 w-fit rounded-xl border border-gray-200 bg-white p-2"
        id="preview">
        <img class="mb-2 aspect-square h-full max-h-64 rounded-lg object-cover"
            id="preview-image"
            src="{{ $value ? asset('storage/' . $value) : '#' }}">
        <div class="mb-1 flex items-center justify-between gap-x-3 whitespace-nowrap">
            <div class="w-10">
                <span class="text-sm text-gray-800">
                    <span>Uploaded</span>
                </span>
            </div>
            <div class="flex items-center gap-x-2">
                <button class="text-gray-500 hover:text-gray-800 focus:text-gray-800 focus:outline-none"
                    id="delete-btn"
                    type="button"
                    onclick="deletePreview()">
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
                        <path d="M3 6h18"></path>
                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                        <line x1="10"
                            x2="10"
                            y1="11"
                            y2="17"></line>
                        <line x1="14"
                            x2="14"
                            y1="11"
                            y2="17"></line>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const preview = document.getElementById('preview');
                const previewImage = document.getElementById('preview-image');
                previewImage.src = e.target.result;
                preview.classList.remove('hidden');
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        function deletePreview() {
            const preview = document.getElementById('preview');
            const previewImage = document.getElementById('preview-image');
            const fileInput = document.getElementById('file-input');

            preview.classList.add('hidden');
            previewImage.src = '#';
            fileInput.value = '';
        }
    </script>
</div>
