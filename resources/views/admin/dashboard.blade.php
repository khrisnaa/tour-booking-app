<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
        <p class="text-sm text-gray-500">Monitor and manage your website’s performance, data, and key metrics in one
            central hub.</p>
    </x-slot>

    <div class="mx-auto max-w-7xl space-y-4 sm:px-6 lg:px-8">
        <!-- Grid -->
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 lg:grid-cols-4">
            <!-- Card -->
            <div class="flex flex-col rounded-xl border bg-white shadow-sm">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Total users
                        </p>
                        <div class="hs-tooltip">
                            <div class="hs-tooltip-toggle">
                                <svg class="size-4 shrink-0 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                    <path d="M12 17h.01" />
                                </svg>
                                <span
                                    class="hs-tooltip-content invisible absolute z-10 inline-block rounded bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                    role="tooltip">
                                    The number of daily users
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl font-medium text-gray-800">
                            72,540
                        </h3>
                        <span class="flex items-center gap-x-1 text-green-600">
                            <svg class="size-4 inline-block self-center" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                <polyline points="16 7 22 7 22 13" />
                            </svg>
                            <span class="inline-block text-sm"> 1.7% </span>
                        </span>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col rounded-xl border bg-white shadow-sm">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Sessions
                        </p>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl font-medium text-gray-800 sm:text-2xl">
                            29.4%
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col rounded-xl border bg-white shadow-sm">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Avg. Click Rate
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl font-medium text-gray-800 sm:text-2xl">
                            56.8%
                        </h3>
                        <span class="flex items-center gap-x-1 text-red-600">
                            <svg class="size-4 inline-block self-center" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                                <polyline points="16 17 22 17 22 11" />
                            </svg>
                            <span class="inline-block text-sm"> 1.7% </span>
                        </span>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col rounded-xl border bg-white shadow-sm">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Pageviews
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl font-medium text-gray-800 sm:text-2xl">
                            92,913
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
        <div class="grid gap-4 sm:gap-6 lg:grid-cols-2">
            <!-- Card -->
            <div class="flex min-h-[410px] flex-col rounded-xl border bg-white p-4 shadow-sm md:p-5">
                <!-- Header -->
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-sm text-gray-500">
                            Income
                        </h2>
                        <p class="text-xl font-medium text-gray-800 sm:text-2xl">
                            $126,238.49
                        </p>
                    </div>

                    <div>
                        <span
                            class="inline-flex items-center gap-x-1 rounded-md bg-teal-100 px-1.5 py-[5px] text-xs font-medium text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-3.5 inline-block" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 5v14" />
                                <path d="m19 12-7 7-7-7" />
                            </svg>
                            25%
                        </span>
                    </div>
                </div>
                <!-- End Header -->
                <div id="hs-multiple-bar-charts"></div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex min-h-[410px] flex-col rounded-xl border bg-white p-4 shadow-sm md:p-5">
                <!-- Header -->
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-sm text-gray-500">
                            Visitors
                        </h2>
                        <p class="text-xl font-medium text-gray-800 sm:text-2xl">
                            80.3k
                        </p>
                    </div>

                    <div>
                        <span
                            class="inline-flex items-center gap-x-1 rounded-md bg-red-100 px-1.5 py-[5px] text-xs font-medium text-red-800 dark:bg-red-500/10 dark:text-red-500">
                            <svg class="size-3.5 inline-block" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 5v14" />
                                <path d="m19 12-7 7-7-7" />
                            </svg>
                            2%
                        </span>
                    </div>
                </div>
                <!-- End Header -->

                <div id="hs-single-area-chart"></div>
            </div>
            <!-- End Card -->
        </div>
    </div>

    @push('scripts')
        <!-- Apexcharts -->
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

        <script>
            window.addEventListener('load', () => {
                (function() {
                    buildChart(
                        '#hs-multiple-bar-charts',
                        (mode) => ({
                            chart: {
                                type: 'bar',
                                height: 300,
                                toolbar: {
                                    show: false,
                                },
                                zoom: {
                                    enabled: false,
                                },
                            },
                            series: [{
                                    name: 'Chosen Period',
                                    data: [
                                        23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000,
                                        60000, 66000, 34000, 78000,
                                    ],
                                },
                                {
                                    name: 'Last Period',
                                    data: [
                                        17000, 76000, 85000, 101000, 98000, 87000, 105000, 91000,
                                        114000, 94000, 67000, 66000,
                                    ],
                                },
                            ],
                            plotOptions: {
                                bar: {
                                    horizontal: false,
                                    columnWidth: '16px',
                                    borderRadius: 0,
                                },
                            },
                            legend: {
                                show: false,
                            },
                            dataLabels: {
                                enabled: false,
                            },
                            stroke: {
                                show: true,
                                width: 8,
                                colors: ['transparent'],
                            },
                            xaxis: {
                                categories: [
                                    'January',
                                    'February',
                                    'March',
                                    'April',
                                    'May',
                                    'June',
                                    'July',
                                    'August',
                                    'September',
                                    'October',
                                    'November',
                                    'December',
                                ],
                                axisBorder: {
                                    show: false,
                                },
                                axisTicks: {
                                    show: false,
                                },
                                crosshairs: {
                                    show: false,
                                },
                                labels: {
                                    style: {
                                        colors: '#9ca3af',
                                        fontSize: '13px',
                                        fontFamily: 'Inter, ui-sans-serif',
                                        fontWeight: 400,
                                    },
                                    offsetX: -2,
                                    formatter: (title) => title.slice(0, 3),
                                },
                            },
                            yaxis: {
                                labels: {
                                    align: 'left',
                                    minWidth: 0,
                                    maxWidth: 140,
                                    style: {
                                        colors: '#9ca3af',
                                        fontSize: '13px',
                                        fontFamily: 'Inter, ui-sans-serif',
                                        fontWeight: 400,
                                    },
                                    formatter: (value) =>
                                        value >= 1000 ? `${value / 1000}k` : value,
                                },
                            },
                            states: {
                                hover: {
                                    filter: {
                                        type: 'darken',
                                        value: 0.9,
                                    },
                                },
                            },
                            tooltip: {
                                y: {
                                    formatter: (value) =>
                                        `$${value >= 1000 ? `${value / 1000}k` : value}`,
                                },
                                custom: function(props) {
                                    const {
                                        categories
                                    } = props.ctx.opts.xaxis;
                                    const {
                                        dataPointIndex
                                    } = props;
                                    const title = categories[dataPointIndex];
                                    const newTitle = `${title}`;

                                    return buildTooltip(props, {
                                        title: newTitle,
                                        mode,
                                        hasTextLabel: true,
                                        wrapperExtClasses: 'min-w-28',
                                        labelDivider: ':',
                                        labelExtClasses: 'ms-2',
                                    });
                                },
                            },
                            responsive: [{
                                breakpoint: 568,
                                options: {
                                    chart: {
                                        height: 300,
                                    },
                                    plotOptions: {
                                        bar: {
                                            columnWidth: '14px',
                                        },
                                    },
                                    stroke: {
                                        width: 8,
                                    },
                                    labels: {
                                        style: {
                                            colors: '#9ca3af',
                                            fontSize: '11px',
                                            fontFamily: 'Inter, ui-sans-serif',
                                            fontWeight: 400,
                                        },
                                        offsetX: -2,
                                        formatter: (title) => title.slice(0, 3),
                                    },
                                    yaxis: {
                                        labels: {
                                            align: 'left',
                                            minWidth: 0,
                                            maxWidth: 140,
                                            style: {
                                                colors: '#9ca3af',
                                                fontSize: '11px',
                                                fontFamily: 'Inter, ui-sans-serif',
                                                fontWeight: 400,
                                            },
                                            formatter: (value) =>
                                                value >= 1000 ? `${value / 1000}k` : value,
                                        },
                                    },
                                },
                            }, ],
                        }), {
                            colors: ['#2563eb', '#d1d5db'],
                            grid: {
                                borderColor: '#e5e7eb',
                            },
                        }, {
                            colors: ['#6b7280', '#2563eb'],
                            grid: {
                                borderColor: '#404040',
                            },
                        },
                    );
                })();
            });
        </script>
        <script>
            window.addEventListener('load', () => {
                (function() {
                    buildChart(
                        '#hs-single-area-chart',
                        (mode) => ({
                            chart: {
                                height: 300,
                                type: 'area',
                                toolbar: {
                                    show: false,
                                },
                                zoom: {
                                    enabled: false,
                                },
                            },
                            series: [{
                                name: 'Visitors',
                                data: [180, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70],
                            }, ],
                            legend: {
                                show: false,
                            },
                            dataLabels: {
                                enabled: false,
                            },
                            stroke: {
                                curve: 'straight',
                                width: 2,
                            },
                            grid: {
                                strokeDashArray: 2,
                            },
                            fill: {
                                type: 'gradient',
                                gradient: {
                                    type: 'vertical',
                                    shadeIntensity: 1,
                                    opacityFrom: 0.1,
                                    opacityTo: 0.8,
                                },
                            },
                            xaxis: {
                                type: 'category',
                                tickPlacement: 'on',
                                categories: [
                                    '25 January 2023',
                                    '26 January 2023',
                                    '27 January 2023',
                                    '28 January 2023',
                                    '29 January 2023',
                                    '30 January 2023',
                                    '31 January 2023',
                                    '1 February 2023',
                                    '2 February 2023',
                                    '3 February 2023',
                                    '4 February 2023',
                                    '5 February 2023',
                                ],
                                axisBorder: {
                                    show: false,
                                },
                                axisTicks: {
                                    show: false,
                                },
                                crosshairs: {
                                    stroke: {
                                        dashArray: 0,
                                    },
                                    dropShadow: {
                                        show: false,
                                    },
                                },
                                tooltip: {
                                    enabled: false,
                                },
                                labels: {
                                    style: {
                                        colors: '#9ca3af',
                                        fontSize: '13px',
                                        fontFamily: 'Inter, ui-sans-serif',
                                        fontWeight: 400,
                                    },
                                    formatter: (title) => {
                                        let t = title;

                                        if (t) {
                                            const newT = t.split(' ');
                                            t = `${newT[0]} ${newT[1].slice(0, 3)}`;
                                        }

                                        return t;
                                    },
                                },
                            },
                            yaxis: {
                                labels: {
                                    align: 'left',
                                    minWidth: 0,
                                    maxWidth: 140,
                                    style: {
                                        colors: '#9ca3af',
                                        fontSize: '13px',
                                        fontFamily: 'Inter, ui-sans-serif',
                                        fontWeight: 400,
                                    },
                                    formatter: (value) =>
                                        value >= 1000 ? `${value / 1000}k` : value,
                                },
                            },
                            tooltip: {
                                x: {
                                    format: 'MMMM yyyy',
                                },
                                y: {
                                    formatter: (value) =>
                                        `${value >= 1000 ? `${value / 1000}k` : value}`,
                                },
                                custom: function(props) {
                                    const {
                                        categories
                                    } = props.ctx.opts.xaxis;
                                    const {
                                        dataPointIndex
                                    } = props;
                                    const title = categories[dataPointIndex].split(' ');
                                    const newTitle = `${title[0]} ${title[1]}`;

                                    return buildTooltip(props, {
                                        title: newTitle,
                                        mode,
                                        valuePrefix: '',
                                        hasTextLabel: true,
                                        markerExtClasses: '!rounded-sm',
                                        wrapperExtClasses: 'min-w-28',
                                    });
                                },
                            },
                            responsive: [{
                                breakpoint: 568,
                                options: {
                                    chart: {
                                        height: 300,
                                    },
                                    labels: {
                                        style: {
                                            colors: '#9ca3af',
                                            fontSize: '11px',
                                            fontFamily: 'Inter, ui-sans-serif',
                                            fontWeight: 400,
                                        },
                                        offsetX: -2,
                                        formatter: (title) => title.slice(0, 3),
                                    },
                                    yaxis: {
                                        labels: {
                                            align: 'left',
                                            minWidth: 0,
                                            maxWidth: 140,
                                            style: {
                                                colors: '#9ca3af',
                                                fontSize: '11px',
                                                fontFamily: 'Inter, ui-sans-serif',
                                                fontWeight: 400,
                                            },
                                            formatter: (value) =>
                                                value >= 1000 ? `${value / 1000}k` : value,
                                        },
                                    },
                                },
                            }, ],
                        }), {
                            colors: ['#2563eb', '#9333ea'],
                            fill: {
                                gradient: {
                                    stops: [0, 90, 100],
                                },
                            },
                            grid: {
                                borderColor: '#e5e7eb',
                            },
                        }, {
                            colors: ['#3b82f6', '#a855f7'],
                            fill: {
                                gradient: {
                                    stops: [100, 90, 0],
                                },
                            },
                            grid: {
                                borderColor: '#404040',
                            },
                        },
                    );
                })();
            });
        </script>
    @endpush
</x-app-layout>
