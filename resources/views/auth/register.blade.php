<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <x-application-logo class="mx-auto h-10 w-auto text-primary-500"></x-application-logo>
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('auth.register') }}" method="POST">
                @csrf
                <div>
                    <x-input-label for="email">Email address</x-input-label>
                    <div class="mt-2">
                        <x-input-text name="email" id="email" type="email" autocomplete="username" required value="{{ old('email') }}"></x-input-text>
                        @error('email')
                            <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <x-input-label for="name">Name</x-input-label>
                    <div class="mt-2">
                        <x-input-text name="name" id="name" autocomplete="name" required value="{{ old('name') }}"></x-input-text>
                        @error('name')
                            <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <x-input-label for="password">Password</x-input-label>
                    <div class="mt-2">
                        <x-input-text name="password" id="password" type="password" autocomplete="new-password" required></x-input-text>
                        @error('password')
                            <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <x-input-label for="password_confirmation">Confirm password</x-input-label>
                    <div class="mt-2">
                        <x-input-text name="password_confirmation" id="password_confirmation" type="password" autocomplete="new-password" required></x-input-text>
                        @error('password_confirmation')
                            <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <x-button type="submit">Register</x-button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account?
                <a href="{{ route('auth.login') }}" class="font-semibold leading-6 text-primary-500 hover:text-primary-400">Log in here!</a>
            </p>
        </div>
    </div>
</x-layout>
