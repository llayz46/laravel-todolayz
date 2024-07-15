@props(['name'])

@php
    $classes = 'block w-full rounded-md border-0 py-1.5 bg-background text-title shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6';
    if ($errors->has($name)) {
        $classes .= ' ring-primary-300';
    }
@endphp

<textarea name="{{ $name }}" class="{{ $classes }}" {{ $attributes }}>{{ $slot }}</textarea>
