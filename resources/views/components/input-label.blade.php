@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-emerald-800']) }}>
    {{ $value ?? $slot }}
</label>
