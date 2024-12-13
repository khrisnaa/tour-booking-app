<div id="hs-application-sidebar"
    class="hs-overlay fixed inset-y-0 start-0 z-[60] hidden h-full w-[260px] -translate-x-full transform border-e border-gray-200 bg-white transition-all duration-300 [--auto-close:lg] hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:block lg:translate-x-0"
    role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex h-full max-h-full flex-col">
        <div class="px-6 pt-4">
            <!-- Logo -->
            <a class="inline-block flex-none rounded-xl text-xl font-semibold focus:opacity-80 focus:outline-none"
                href="#" aria-label="WeBali Tour">
                WeBali Tour
            </a>
            <!-- End Logo -->
        </div>

        <!-- Content -->
        <div
            class="h-full overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar]:w-2">
            <nav class="hs-accordion-group flex w-full flex-col flex-wrap p-3" data-hs-accordion-always-open>
                <ul class="flex flex-col space-y-1">
                    <x-admin.nav-link href="{{ route('admin.dashboard') }}"
                        icon="<path d='m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z' />
                        <polyline points='9 22 9 12 15 12 15 22' />"
                        text="Dashboard" :active="request()->routeIs('admin.dashboard*')" />

                    <x-admin.nav-link href="{{ route('admin.categories.index') }}"
                        icon="<path d='M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z'/>
                        <circle cx='7.5' cy='7.5' r='.5' fill='currentColor'/>"
                        text="Categories" :active="request()->routeIs('admin.categories*')" />

                    <x-admin.nav-link href="{{ route('admin.tour-packages.index') }}"
                        icon="<path d='M13 8c0-2.76-2.46-5-5.5-5S2 5.24 2 8h2l1-1 1 1h4'/>
                        <path d='M13 7.14A5.82 5.82 0 0 1 16.5 6c3.04 0 5.5 2.24 5.5 5h-3l-1-1-1 1h-3'/>
                        <path d='M5.89 9.71c-2.15 2.15-2.3 5.47-.35 7.43l4.24-4.25.7-.7.71-.71 2.12-2.12c-1.95-1.96-5.27-1.8-7.42.35'/>
                        <path d='M11 15.5c.5 2.5-.17 4.5-1 6.5h4c2-5.5-.5-12-1-14'/>"
                        text="Tour Packages" :active="request()->routeIs('admin.tour-packages*')" />

                    <x-admin.nav-link href="{{ route('admin.banks.index') }}"
                        icon="<rect width='20' height='14' x='2' y='5' rx='2'/>
                        <line x1='2' x2='22' y1='10' y2='10'/>"
                        text="Bank Accounts" :active="request()->routeIs('admin.banks*')" />

                    <x-admin.nav-link href="{{ route('admin.bookings.index') }}"
                        icon="<path d='M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20'/>
                        <path d='m9 9.5 2 2 4-4'/>"
                        text="Bookings" :active="request()->routeIs('admin.bookings*')" />

                    <x-admin.nav-link href="{{ route('admin.reviews.index') }}"
                        icon="<path d='M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z' />"
                        text="Reviews" :active="request()->routeIs('admin.reviews*')" />
                </ul>
            </nav>
        </div>
        <!-- End Content -->
    </div>
</div>
