@props(['type' => 'info'])

@php
$colors = [
    'success' => 'bg-emerald-50 border-emerald-200 text-emerald-800',
    'danger'  => 'bg-red-50 border-red-200 text-red-800',
    'warning' => 'bg-amber-50 border-amber-200 text-amber-800',
    'info'    => 'bg-blue-50 border-blue-200 text-blue-800',
];
$class = $colors[$type] ?? $colors['info'];
@endphp

<div {{ $attributes->merge(['class' => "mb-5 p-3 rounded-lg border text-sm $class"]) }}>
    {{ $slot }}
</div>