<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">
        <meta name="csrf-token"
              content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net"
              rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
              rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('styles')
    </head>

    <body class="font-sans antialiased">
        {{-- <div class="min-h-screen bg-gray-100">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}

        <!-- ========== HEADER ========== -->
        <livewire:layout.navigation />
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <div class="-mt-px">
            <!-- Breadcrumb -->
            <div class="sticky inset-x-0 top-0 z-20 border-y bg-white px-4 sm:px-6 lg:hidden lg:px-8">
                <div class="flex items-center py-2">
                    <!-- Navigation Toggle -->
                    <button class="flex size-8 items-center justify-center gap-x-2 rounded-lg border border-gray-200 text-gray-800 hover:text-gray-500 focus:text-gray-500 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                            data-hs-overlay="#hs-application-sidebar"
                            type="button"
                            aria-haspopup="dialog"
                            aria-expanded="false"
                            aria-controls="hs-application-sidebar"
                            aria-label="Toggle navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <svg class="size-4 shrink-0"
                             xmlns="http://www.w3.org/2000/svg"
                             width="24"
                             height="24"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">
                            <rect width="18"
                                  height="18"
                                  x="3"
                                  y="3"
                                  rx="2" />
                            <path d="M15 3v18" />
                            <path d="m8 9 3 3-3 3" />
                        </svg>
                    </button>
                    <!-- End Navigation Toggle -->

                    <!-- Breadcrumb -->
                    <ol class="ms-3 flex items-center whitespace-nowrap">
                        <li class="flex items-center text-sm text-gray-800">
                            Application Layout
                            <svg class="mx-3 size-2.5 shrink-0 overflow-visible text-gray-400"
                                 width="16"
                                 height="16"
                                 viewBox="0 0 16 16"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                      stroke="currentColor"
                                      stroke-width="2"
                                      stroke-linecap="round" />
                            </svg>
                        </li>
                        <li class="truncate text-sm font-semibold text-gray-800"
                            aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                    <!-- End Breadcrumb -->
                </div>
            </div>
            <!-- End Breadcrumb -->
        </div>

        <!-- Sidebar -->
        <x-admin.sidebar />
        <!-- End Sidebar -->

        <!-- Content -->
        <div class="min-h-screen w-full bg-gray-100 lg:ps-64">
            <div class="space-y-4 p-4 sm:space-y-6 sm:p-6">
                <div class="mx-auto max-w-7xl space-y-4 sm:px-6 lg:px-8">
                    @if ($back)
                        <a class="inline-flex items-center gap-x-1 rounded-lg px-2 text-sm font-medium text-gray-500"
                           href="{{ $back }}">
                            <svg class="lucide lucide-chevron-left"
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="16"
                                 height="16"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6" />
                            </svg> Back
                        </a>
                    @endif

                    <header class="rounded-xl bg-white shadow">
                        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>

                    @if (session('success'))
                        <x-admin.success-alert title="{{ session('success.title') }}"
                                               description="{{ session('success.description') }}" />
                    @endif

                    {{ $slot }}
                </div>

            </div>
        </div>
        <!-- End Content -->
        <!-- ========== END MAIN CONTENT ========== -->

        @stack('scripts')
    </body>

</html>
