<input type="checkbox" {{ $attributes->merge(['class' => 'rounded border-gray-300 dark:border-gray-700 bg-background text-primary-500 shadow-sm focus:ring-primary-500']) }}>
<span class="ms-2 text-sm text-title">{{ $slot }}</span>
