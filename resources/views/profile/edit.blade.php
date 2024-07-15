<x-layout pageTitle="Profile">
    <div class="min-h-full">
        <nav class="bg-background shadow-sm dark:shadow-gray-200/10" data-controller="dropdown">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 justify-between">
                    <div class="flex">
                        <a href="{{ route('home') }}" class="flex flex-shrink-0 items-center">
                            <x-application-logo
                                class="block h-8 w-auto text-primary-500 lg:hidden"></x-application-logo>
                            <x-application-logo
                                class="lg:block h-8 w-auto text-primary-500 hidden"></x-application-logo>
                        </a>
                        <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                            <x-nav-link :href="route('home')" type="dashboard-link" :active="false">
                                Todos
                            </x-nav-link>
                            <x-nav-link :href="route('list.browse')" type="dashboard-link" :active="false">
                                Todos
                            </x-nav-link>
                            <x-nav-link :href="route('profile.edit')" type="dashboard-link" :active="request()->routeIs('profile.edit')">
                                Profile
                            </x-nav-link>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center">
                        <x-nav-link tag="button" type="button-link" :accent="true" class="flex" data-action="click->darkmode#toggleMode" data-darkmode-target="themeToggle"></x-nav-link>

                        <!-- Profile dropdown -->
                        <div class="relative ml-3" data-controller="dropdown">
                            <div>
                                <button type="button" data-action="click->dropdown#toggle"
                                        class="relative flex rounded-full bg-background text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                         src="{{ $user->avatar ? $user->imageUrl() : 'https://ui-avatars.com/api/?background=ebe6ef&name='. $user->name .'&color=f9322c&font-size=0.5&semibold=true&format=svg' }}"
                                         alt="">
                                </button>
                            </div>
                            <div
                                class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-background py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1" data-dropdown-target="menu">
                                <form action="{{ route('auth.logout') }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="w-full text-start block px-4 py-2 text-sm text-title hover:bg-gray-50 dark:hover:bg-gray-200/10" role="menuitem" tabindex="-1">Sign out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex items-center sm:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                                class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-body focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"
                                aria-controls="mobile-menu" aria-expanded="false" data-action="click->dropdown#toggleProfile click->dropdown#toggle">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true" data-dropdown-target="profileMenu">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                            </svg>
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true" data-dropdown-target="profileMenu">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden" id="mobile-menu" data-dropdown-target="menu">
                <div class="space-y-1 pb-3 pt-2">
                    <!-- Current: "border-indigo-500 bg-indigo-50 text-indigo-700", Default: "border-transparent text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800" -->
                    <a href="{{ route('home') }}"
                       class="border-transparent text-body block border-l-4 py-2 pl-3 pr-4 text-base font-medium">Home</a>
                    <a href="{{ route('list.new') }}"
                       class="border-transparent text-body block border-l-4 py-2 pl-3 pr-4 text-base font-medium">Todos</a>
                    <a href="{{ route('profile.edit') }}"
                       class="border-primary-500 bg-primary-50 text-primary-700 block border-l-4 py-2 pl-3 pr-4 text-base font-medium"
                       aria-current="page">Profile</a>
                </div>
                <div class="border-t border-gray-200 pb-3 pt-4">
                    <div class="flex items-center px-4">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full object-cover"
                                 src="{{ $user->avatar ? $user->imageUrl() : 'https://ui-avatars.com/api/?background=ebe6ef&name='. $user->name .'&color=f9322c&font-size=0.5&semibold=true&format=svg' }}"
                                 alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-title">{{ \Illuminate\Support\Str::title($user->name) }}</div>
                            <div class="text-sm font-medium text-body">{{ $user->email }}</div>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <form action="{{ route('auth.logout') }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                                    class="block w-full text-start px-4 py-2 text-sm text-body"
                                    role="menuitem" tabindex="-1">Sign out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div class="py-10">
            <header>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-title">Profile</h1>
                </div>
            </header>
            <main class="container mx-auto max-w-7xl px-6 lg:px-8">
                <x-profile-form
                    route="profile.update"
                    method="PATCH"
                    form-title="Profile Information"
                    formDescription="Update your account's profile information and email address."
                    fields="2">
                    <div class="sm:col-span-4">
                        <x-input-label for="name">Name</x-input-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 sm:max-w-md">
                                <x-input-text name="name" id="name" autocomplete="name"
                                              required :value="$user->name" type="text">
                                </x-input-text>
                            </div>
                            @error('name')
                                <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-input-label for="email">Email address</x-input-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 sm:max-w-md">
                                <x-input-text name="email" id="email" autocomplete="email"
                                              required :value="$user->email" type="text">
                                </x-input-text>
                            </div>
                            @error('email')
                                <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </x-profile-form>

                <x-profile-form
                    route="profile.updateImage"
                    method="POST"
                    form-title="Profile Image"
                    :file="true"
                    :user="$user"
                    formDescription="Update your profile avatar."
                    fields="1">
                    <div class="sm:col-span-4">
                        <x-input-label for="avatar">Avatar</x-input-label>
                        <div class="mt-2">
                            <div class="col-span-full">
                                <div class="mt-2 flex justify-center rounded-lg border-dashed border-2 dark:border-gray-200/10 px-6 py-10">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-body">
                                            <label for="avatar" class="relative cursor-pointer rounded-md font-semibold text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-primary-500 focus-within:ring-offset-2 hover:text-primary-400">
                                                <span>Upload a file</span>
                                                <input id="avatar" name="avatar" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs leading-5 text-body">PNG, JPG, SVG up to 10MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-profile-form>

                <x-profile-form
                    route="profile.updatePassword"
                    method="PUT"
                    form-title="Update Password"
                    formDescription="Ensure your account is using a long, random password to stay secure."
                    fields="3">
                    <div class="sm:col-span-4">
                        <x-input-label for="current_password">Current password</x-input-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 sm:max-w-md">
                                <x-input-text name="current_password" id="current_password" autocomplete="current-password"
                                              required type="password" autocomplete="new-password">
                                </x-input-text>
                            </div>
                            @error('current_password')
                                <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-input-label for="new_password">New password</x-input-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 sm:max-w-md">
                                <x-input-text name="new_password" id="new_password" autocomplete="new_password"
                                              required type="password">
                                </x-input-text>
                            </div>
                            @error('new_password')
                                <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-input-label for="new_password_confirm">Confirm new password</x-input-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 sm:max-w-md">
                                <x-input-text name="new_password_confirm" id="new_password_confirm"
                                              required type="password">
                                </x-input-text>
                            </div>
                            @error('new_password_confirm')
                                <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </x-profile-form>
            </main>
        </div>
    </div>
</x-layout>
