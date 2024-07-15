@props(['active', 'type' => 'link', 'color' => 'text-body', 'tag' => 'a', 'accent'])

@php
    $classes = ($active ?? false)
            ? 'text-white bg-primary-500'
            : 'text-body hover:bg-primary-400 hover:text-white transition';

    $accentClasses = ($accent ?? false)
            ? 'bg-accent-500 hover:bg-accent-400 dark:hover:bg-accent-600'
            : 'bg-primary-500 hover:bg-primary-400 dark:hover:bg-primary-600';
@endphp

@if ($type === 'link')
    <a @class(['text-base font-normal px-3.5 py-2.5 rounded-md', $classes]) {{ $attributes }}>
        {{ $slot }}
    </a>
@elseif ($type === 'button-link')
    <{{ $tag }} @class(['text-base font-normal px-3.5 py-2.5 rounded-md text-white flex gap-2 items-center w-fit', $accentClasses]) {{ $attributes }}>
        {{ $slot }}
    </{{ $tag }}>
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
@elseif ($type === 'dashboard-link')
    <a class="{{ $active ? 'border-primary-500 text-title' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium" aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
@endif
