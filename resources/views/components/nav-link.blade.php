@props(['active'])

@php
$classes = ($active ?? false)
            ? 'btn btn-primary btn-active text-xl'
            : 'btn btn-ghost text-xl';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
