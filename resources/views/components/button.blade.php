@props(['type'])

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'flex justify-center rounded-md bg-primary-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600']) }}>
    {{ $slot }}
</button>
