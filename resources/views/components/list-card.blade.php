<div class="bg-background rounded-md shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-700 p-6">
    <h1 class="text-2xl font-bold tracking-tight text-title sm:text-4xl">{{ $title }}</h1>
    <p class="my-2 text-lg leading-8 text-body">{{ $description }}</p>
    <x-nav-link href="{{ route($route, $taskList) }}" type="button-link">Show</x-nav-link>
</div>
