<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net"
            rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>

    <body class="font-sans antialiased">

        <div class="border-b border-gray-200">
            <nav class="flex gap-x-1"
                role="tablist">
                <button
                    class="active inline-flex items-center gap-x-2 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-sm text-gray-500 hover:text-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                    data-hs-tab="#tabs-with-underline-1"
                    type="button"
                    role="tab">
                    Tab 1
                </button>

                @for ($i = 1; $i <= 3; $i++)
                    <button
                        class="inline-flex items-center gap-x-2 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-sm text-gray-500 hover:text-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 hs-tab-active:border-blue-600 hs-tab-active:font-semibold hs-tab-active:text-blue-600"
                        data-hs-tab="#tabs-with-underline-{{ $i + 1 }}"
                        type="button"
                        role="tab">
                        Tab 3
                    </button>
                @endfor

            </nav>
        </div>

        <div class="mt-3">
            @for ($i = 1; $i <= 3; $i++)
                <div class="hidden"
                    id="tabs-with-underline-{{ $i }}"
                    role="tabpanel">
                    <p class="text-gray-500">
                        This is the <em class="font-semibold text-gray-800">{{ $i }}</em> item's tab body.
                    </p>
                </div>
            @endfor

        </div>

    </body>

</html>
