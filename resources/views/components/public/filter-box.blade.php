<div class="space-y-8">
    <div>
        <x-public.search-box id="searchInput"
            type="text"
            value="{{ request('search') }}"
            autocomplete="off"
            onkeydown="handleSearchKeyDown(event)" />
    </div>

    <div class="space-y-4 overflow-hidden">
        <div class="flex gap-2">
            @foreach ($categories as $category)
                <x-public.category-button :slug="$category->slug">
                    {{ $category->name }}
                </x-public.category-button>
            @endforeach
        </div>
    </div>
</div>

<script>
    function handleSearchKeyDown(event) {
        // Check if the Enter key (key code 13) is pressed
        if (event.key === 'Enter') {
            const searchValue = document.getElementById('searchInput').value;
            const url = new URL(window.location.origin + '/tours'); // Update with your desired route
            if (searchValue) {
                url.searchParams.set('search', searchValue); // Add the search query to the URL
            } else {
                url.searchParams.delete('search'); // Remove search query if input is empty
            }
            window.location.href = url.toString(); // Redirect to the updated URL
        }
    }
</script>
