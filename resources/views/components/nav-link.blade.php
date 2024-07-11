@props(['active', 'type' => 'link', 'color' => 'text-body'])

@php
    $classes = ($active ?? false)
            ? 'text-background bg-primary-500'
            : 'text-body hover:bg-primary-400 hover:text-background transition';
@endphp

@if ($type === 'link')
    <a @class(['text-base font-normal px-3.5 py-2.5 rounded-md', $classes]) {{ $attributes }}>
        {{ $slot }}
    </a>
@elseif ($type === 'button-link')
    <a @class(['text-base font-normal px-3.5 py-2.5 rounded-md bg-primary-500 text-background hover:bg-primary-400']) {{ $attributes }}>
        {{ $slot }}
    </a>
@elseif ($type === 'arrow-link')
    <a class="text-base font-normal {{ $color }}" {{ $attributes }}>
        {{ $slot }} <span aria-hidden="true">→</span>
    </a>
@elseif ($type === 'border-link')
    <a {{ $attributes->merge(['class' => 'block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600']) }}>
        {{ $slot }}
    </a>
@elseif ($type === 'text-link')
    <a class="text-base font-normal text-body hover:text-title" {{ $attributes }}>
        {{ $slot }}
    </a>
@endif
