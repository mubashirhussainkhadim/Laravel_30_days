@props(['color' => 'blue']) {{-- Default color is blue if not passed --}}
@php
    $classes = "rounded-md bg-{$color}-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-{$color}-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-{$color}-600";
@endphp
<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
