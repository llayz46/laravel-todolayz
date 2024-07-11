<div class="flex flex-col">
    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-title">
        <svg class="h-5 w-5 flex-none text-primary-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            {{ $svgPath }}
        </svg>
        {{ $title }}
    </dt>
    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-body">
        <p class="flex-auto">{{ $content }}</p>
        <p class="mt-6">
            <x-nav-link href="#" type="arrow-link" color="text-primary-500">Learn more</x-nav-link>
        </p>
    </dd>
</div>
