@props(['disabled' => false])
<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'block w-full rounded-lg border-gray-200 px-3 py-2 pe-11 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:pointer-events-none disabled:opacity-50']) }}>
