@props(['features', 'side'])

@php
    $classes = match($side) {
        'left' => 'lg:mt-8 lg:rounded-r-none',
        'middle' => 'lg:z-10 lg:rounded-b-none',
        'right' => 'lg:mt-8 lg:rounded-l-none',
    };
@endphp

<div @class(['flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10', $classes])>
    <div>
        <div class="flex items-center justify-between gap-x-4">
            <h3 id="tier-{{ strtolower($planName) }}" class="text-lg font-semibold leading-8 text-title">{{ $planName }}</h3>
        </div>
        <p class="mt-4 text-sm leading-6 text-body">{{ $planDescription }}</p>
        <p class="mt-6 flex items-baseline gap-x-1">
            <span class="text-4xl font-bold tracking-tight text-title">${{ $planPrice }}</span>
            <span class="text-sm font-semibold leading-6 text-body">/month</span>
        </p>
        <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-body">
            @foreach($features as $feature)
                <li class="flex gap-x-3">
                    <svg class="h-6 w-5 flex-none text-primary-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
                    </svg>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>
    </div>
    <x-nav-link href="#" type="border-link" class="mt-8 {{ $side === 'middle' ? 'bg-primary-500 text-white shadow-sm hover:bg-primary-400' : 'text-primary-500 ring-1 ring-inset ring-primary-200 hover:ring-primary-300' }}" aria-describedby="tier-{{ strtolower($planName) }}">Buy plan</x-nav-link>
</div>
