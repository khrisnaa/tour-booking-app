@props(['value'])

<label {{ $attributes->merge(['class' => 'mt-2.5 inline-block text-sm font-medium text-gray-800']) }}>
    {{ $value ?? $slot }}
</label>
