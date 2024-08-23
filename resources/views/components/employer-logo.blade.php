@props(['employer', 'size' => 'md'])

@php
    $classes = 'rounded-md';
    if ($size === 'sm') {
        $classes .= ' w-[42px] h-[42px]';
    } elseif ($size === 'md') {
            $classes .= ' w-[100px] h-[100px]';
    } elseif ($size === 'lg') {
            $classes .= ' w-[180px] h-[180px]';
    }
@endphp

<img src="{{ asset('storage/'.$employer->logo) }}" alt="{{ $employer->name }} Logo" class="{{$classes}}" />
