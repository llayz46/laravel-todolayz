<div class="flex">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none" {{ $attributes }}>
        <g clip-path="url(#clip0_479_3856)">
            <path d="M17.91 0H14C13.55 0 13.13 0.25 12.91 0.66L0 24H3.92C4.36 24 4.78 23.75 5 23.35L17.91 0Z" fill="#F9322C"/>
            <path d="M6.84004 0H2.93004C2.48004 0 2.06004 0.25 1.84004 0.66L0.0400391 3.93H4.67004L6.84004 0Z" fill="#F9322C"/>
            <path d="M22.1401 6.96997H18.2301C17.7801 6.96997 17.3601 7.21997 17.1401 7.62997L15.3301 10.9H19.9601L22.1301 6.96997H22.1401Z" fill="#F9322C"/>
            <path d="M3.59998 0L1.22998 3.93H19.2L21.37 0H3.59998Z" fill="#F9322C"/>
            <path d="M24.19 3.28L26 0.01L21.37 0L19.2 3.93H23.12C23.56 3.93 23.98 3.68 24.2 3.28H24.19Z" fill="#F9322C"/>
            <path d="M24.4701 20.08L14.9301 20.01L20.4701 10H15.8401L8.1001 24H24.4801C24.8001 24 25.0601 23.73 25.0601 23.4V20.68C25.0601 20.35 24.8001 20.08 24.4901 20.08H24.4701Z" fill="#F9322C"/>
        </g>
        <defs>
            <clipPath id="clip0_479_3856">
                <rect width="26" height="24" fill="white"/>
            </clipPath>
        </defs>
    </svg>

    @if ($slot->isNotEmpty())
        <span class="ml-3 text-2xl font-semibold text-primary-500">{{ $slot }}</span>
    @endif
</div>
