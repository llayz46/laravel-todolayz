<x-layout page-title="404">
    <x-navigation-header></x-navigation-header>
    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="font-semibold text-primary-500 text-9xl">404</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-title sm:text-5xl">Page not found</h1>
            <p class="mt-6 text-base leading-7 text-body">Sorry, we couldn’t find the page you’re looking for.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <x-nav-link href="{{ route('home') }}" type="button-link">Go back home</x-nav-link>
            </div>
        </div>
    </main>
</x-layout>
