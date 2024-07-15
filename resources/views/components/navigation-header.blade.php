<header class="absolute inset-x-0 top-0 z-50" data-controller="dropdown">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                <x-application-logo class="h-8 w-auto text-primary-500">{{ config('app.name') }}</x-application-logo>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-body" data-action="click->dropdown#toggle">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <x-nav-link :href="route('home')" type="link" :active="request()->routeIs('home')">Home</x-nav-link>
            <x-nav-link :href="route('list.browse')" type="link" :active="\Illuminate\Support\Str::startsWith(request()->route()->getName(), 'list.')">Todos</x-nav-link>
            @auth
                <x-nav-link href="{{ route('profile.edit') }}" type="link" :active="\Illuminate\Support\Str::startsWith(request()->route()->getName(), 'profile.')">Profile</x-nav-link>
            @endauth
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-6">
            <x-nav-link tag="button" type="button-link" :accent="true" class="flex" data-action="click->darkmode#toggleMode" data-darkmode-target="themeToggle"></x-nav-link>
            @auth
                <form action="{{ route('auth.logout') }}" method="post">
                    @method('DELETE')
                    @csrf
                    <x-nav-link tag="button" type="button-link">Log out</x-nav-link>
                </form>
            @endauth
            @guest
                <x-nav-link href="{{ route('auth.login') }}" type="link">Log in</x-nav-link>
                <x-nav-link href="{{ route('auth.register') }}" type="button-link">Sign up</x-nav-link>
            @endguest
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="hidden fixed inset-0 z-50" data-dropdown-target="menu"></div>
        <div class="hidden fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" data-dropdown-target="menu">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">LLAYZ INC</span>
                    <x-application-logo class="h-8 w-auto text-primary-500"></x-application-logo>
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-body" data-action="click->dropdown#toggle">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="{{ route('home') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-title">Home</a>
                        <a href="{{ route('list.browse') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-title">Todos</a>
                        <a href="{{ route('profile.edit') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-title">Profile</a>
                    </div>
                    <div class="py-6">
                        @guest
                            <a href="{{ route('auth.login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-title">Log in</a>
                            <a href="{{ route('auth.register') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-title">Sign up</a>
                        @endguest
                        @auth
                            <form action="{{ route('auth.logout') }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-title">Log out</button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
