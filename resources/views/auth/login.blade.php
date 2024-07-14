<x-layout pageTitle="Login">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <a href="{{route('home')}}">
                <x-application-logo class="mx-auto h-10 w-auto text-primary-500"></x-application-logo>
            </a>
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-title">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div>
                    <x-input-label for="email">Email address</x-input-label>
                    <div class="mt-2">
                        <x-input-text name="email" id="email" type="email" autocomplete="username" required value="{{ old('email') }}" placeholder="mail@example.com"></x-input-text>
                        @error('email')
                            <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-input-label for="password">Password</x-input-label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-primary-500 hover:text-primary-400">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <x-input-text name="password" id="password" type="password" autocomplete="current-password" required placeholder="••••••••"></x-input-text>
                        @error('password')
                            <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center">
                            <x-input-checkbox id="remember_me" name="remember">Remember me</x-input-checkbox>
                        </label>
                    </div>
                </div>

                <div>
                    <x-button type="submit" class="w-full">Sign in</x-button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-body">
                No account yet?
                <a href="{{ route('auth.register') }}" class="font-semibold leading-6 text-primary-500 hover:text-primary-400">Register Now!</a>
            </p>
        </div>
    </div>
</x-layout>
