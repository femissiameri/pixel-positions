@props(['size' => 'sm', 'variant' => 'normal'])

@php
$classes = 'font-bold inline-flex justify-center rounded-xl transition-colors duration-300';

    if ($size === 'sm') {
        $classes .= ' text-2xs px-3 py-1';
    }

    if ($size === 'md') {
        $classes .= ' text-sm px-5 py-1';
    }

    if ($variant === 'normal') {
        $classes .= ' bg-white/10 hover:bg-white/25';
    }

    if ($variant === 'outline') {
        $classes .= ' border border-white/10 hover:border-white/25';
    }
@endphp

<a
    href="#"
    class="{{ $classes }}">
    {{ $slot }}
</a>
