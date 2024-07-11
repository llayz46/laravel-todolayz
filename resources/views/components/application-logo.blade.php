<div class="flex">
    <svg width="26" height="24" viewBox="0 0 26 24" fill="currentColor" {{ $attributes }}>
        <g clip-path="url(#clip0_501_2)">
            <path d="M18.2 3.9H23.1C23.5 3.9 24 3.7 24.2 3.3L26 0H2.9C2.4 0 2 0.2 1.8 0.7L0 3.9H11.13L0 24H3.9C4.3 24 4.8 23.8 5 23.4L15.75 3.9H18.2Z"/>
            <path d="M24.6 20.1H15L20.5 10H20.46L22.1 7.1V7H18.2C17.7 7 17.3 7.2 17.1 7.7L15.3 11H15.35L8.19995 24H24.6C24.9 24 25.2 23.7 25.2 23.4V20.7C25.2 20.4 24.9 20.1 24.6 20.1Z"/>
        </g>
        <defs>
            <clipPath id="clip0_501_2">
                <rect width="26" height="24" fill="white"/>
            </clipPath>
        </defs>
    </svg>

    @if ($slot->isNotEmpty())
        <span class="ml-3 text-2xl font-semibold text-primary-500">{{ $slot }}</span>
    @endif
</div>
