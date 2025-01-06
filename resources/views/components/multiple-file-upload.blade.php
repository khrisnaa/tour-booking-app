<div>
    <div>
        <form class="max-w-sm">
            <label class="sr-only"
                for="file-input">Choose file</label>
            <input
                class="block w-full rounded-lg border border-gray-200 text-sm shadow-sm file:me-4 file:border-0 file:bg-gray-50 file:px-4 file:py-3 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
                id="file-input"
                type="file"
                {{ $attributes }}
                multiple
                onchange="previewImages(event)">
        </form>

        <div class="mt-4 grid grid-cols-4 gap-4"
            id="image-preview-container"></div>
    </div>

    <script>
        let allFiles = [];

        function previewImages(event) {
            const newFiles = event.target.files;
            const previewContainer = document.getElementById('image-preview-container');

            // Tambahkan file baru ke array files yang sudah ada
            allFiles = [...allFiles, ...Array.from(newFiles)];

            previewContainer.innerHTML = ''; // Clear previous previews

            // Menampilkan semua gambar yang ada di array allFiles
            allFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgWrapper = document.createElement('div');
                    imgWrapper.classList.add('relative', 'mt-2', 'w-fit', 'rounded-xl', 'border',
                        'border-gray-200', 'bg-white', 'p-2');

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('mb-2', 'aspect-square', 'h-full', 'max-h-64', 'rounded-lg',
                        'object-cover');

                    const deleteButtonContainer = document.createElement('div');
                    deleteButtonContainer.classList.add('mb-2', 'flex', 'items-center', 'justify-end',
                        'gap-x-3', 'whitespace-nowrap', 'w-full', 'p-1');

                    const deleteButton = document.createElement('button');
                    deleteButton.classList.add('text-gray-500', 'hover:text-gray-800', 'focus:text-gray-800',
                        'focus:outline-none');

                    deleteButton.type = 'button';

                    deleteButton.innerHTML = `  
                        <svg class="size-3.5 shrink-0"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24"
                            viewBox="0 0 24 24"
                            fill="none" stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>`;


                    deleteButton.onclick = function() {
                        imgWrapper.remove(); // Remove the image preview on delete
                        removeFile(file); // Hapus file dari array allFiles
                        updateFileInput(); // Update input file setelah penghapusan
                    };

                    imgWrapper.appendChild(img);
                    imgWrapper.appendChild(deleteButtonContainer);
                    deleteButtonContainer.appendChild(deleteButton)
                    previewContainer.appendChild(imgWrapper);
                };
                reader.readAsDataURL(file);
            });

            updateFileInput();
        }

        function updateFileInput() {
            const input = document.getElementById('file-input');

            // Gunakan DataTransfer untuk memperbarui file input
            const dataTransfer = new DataTransfer();
            allFiles.forEach(file => dataTransfer.items.add(file));
            input.files = dataTransfer.files;

            // Menampilkan jumlah file yang terpilih
            if (input.files.length === 0) {
                input.setAttribute('data-files', 'No files selected');
            } else {
                input.setAttribute('data-files', `${input.files.length} files selected`);
            }
        }

        function removeFile(fileToRemove) {
            // Menghapus file yang dipilih dari array allFiles
            allFiles = allFiles.filter(file => file !== fileToRemove);
        }
    </script>

</div>
