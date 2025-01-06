<div>
    <input
        class="block w-full rounded-lg border border-gray-200 text-sm shadow-sm file:me-4 file:border-0 file:bg-gray-50 file:px-4 file:py-3 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
        id="file-input"
        name="{{ $name }}"
        type="file"
        multiple
        onchange="previewImages(event)">

    <div class="mt-4 grid grid-cols-4"
        id="preview-container">
        <!-- Loop over the default photos and display them as previews -->
        @if (isset($value) && is_array($value))
            @foreach ($value as $imageUrl)
                <div class="relative mt-2 w-fit rounded-xl border border-gray-200 bg-white p-2">
                    <img class="mb-2 aspect-square h-full max-h-64 rounded-lg object-cover"
                        src="{{ asset('storage/' . $imageUrl) }}"
                        alt="Uploaded Photo">
                    <button class="text-gray-500 hover:text-gray-800"
                        type="button"
                        onclick="deletePreview('{{ $imageUrl }}')">
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
            @endforeach
        @endif
    </div>

    <script>
        function previewImages(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById('preview-container');

            // Clear previous previews
            previewContainer.innerHTML = '';

            Array.from(files).forEach((file, index) => {
                const reader = new FileReader();

                reader.onload = function(e) {
                    // Create the preview element structure
                    const previewDiv = document.createElement('div');
                    previewDiv.classList.add('relative', 'mt-2', 'w-fit', 'rounded-xl', 'border',
                        'border-gray-200', 'bg-white', 'p-2');

                    // Create the image element
                    const img = document.createElement('img');
                    img.classList.add('mb-2', 'aspect-square', 'h-full', 'max-h-64', 'rounded-lg',
                        'object-cover');
                    img.id = 'preview-img';
                    img.src = e.target.result;

                    // Create the delete button
                    const deleteBtnContainer = document.createElement('div');
                    deleteBtnContainer.classList.add('mb-1', 'flex', 'items-center', 'justify-between',
                        'gap-x-3', 'whitespace-nowrap');

                    const textContainer = document.createElement('div');
                    textContainer.classList.add('w-10');
                    textContainer.innerHTML =
                        '<span class="text-sm text-gray-800"><span>Uploaded</span></span>';

                    const deleteBtnWrapper = document.createElement('div');
                    deleteBtnWrapper.classList.add('flex', 'items-center', 'gap-x-2');

                    const deleteBtn = document.createElement('button');
                    deleteBtn.classList.add('text-gray-500', 'hover:text-gray-800', 'focus:text-gray-800',
                        'focus:outline-none');
                    deleteBtn.id = 'delete-btn';
                    deleteBtn.type = 'button';
                    deleteBtn.innerHTML = `  
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

                    deleteBtn.onclick = function() {
                        previewDiv.remove();

                        const dataTransfer = new DataTransfer();
                        Array.from(event.target.files).forEach((fileItem, i) => {
                            if (i !== index) {
                                dataTransfer.items.add(fileItem);
                            }
                        });

                        event.target.files = dataTransfer.files;

                        const inputEvent = new Event('change', {
                            bubbles: true
                        });
                        event.target.dispatchEvent(inputEvent);
                    };

                    deleteBtnWrapper.appendChild(deleteBtn);
                    deleteBtnContainer.appendChild(textContainer);
                    deleteBtnContainer.appendChild(deleteBtnWrapper);
                    previewDiv.appendChild(img);
                    previewDiv.appendChild(deleteBtnContainer);
                    previewContainer.appendChild(previewDiv);
                };

                if (file) {
                    reader.readAsDataURL(file);
                }
            });
        }

        // Function to handle the deletion of existing photos
        function deletePreview(imageUrl) {
            // Implement logic to remove the image from the preview
            // This may involve removing the image URL from the form data or similar
            console.log('Delete image:', imageUrl);
        }
    </script>
</div>
