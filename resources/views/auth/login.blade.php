<x-guest-layout>
    <x-authentication-card>
        {{--
            <x-slot name="logo">
            <x-authentication-card-logo />
            </x-slot>
        --}}

        <x-validation-errors class="mb-4" />

        @if (session("status"))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session("status") }}
            </div>
        @endif

        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Sign in to your account
            </h2>
            <p class="max-w mt-2 text-center text-sm text-gray-600">
                Or
                <a
                    href="/register"
                    class="rounded-md text-sm font-medium text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    create an account
                </a>
            </p>
        </div>
        <form method="POST" action="{{ route("login") }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input
                    id="email"
                    class="mt-1 block w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input
                    id="password"
                    class="mt-1 block w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="mt-4 flex justify-between">
                <label for="remember_me" class="order-first flex">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">
                        {{ __("Remember me") }}
                    </span>
                </label>

                {{-- Forget Password --}}
                @if (Route::has("password.request"))
                    <a
                        class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        href="{{ route("password.request") }}"
                    >
                        {{ __("Forgot your password?") }}
                    </a>
                @endif
            </div>

            <x-button
                class="group relative mt-4 flex w-full justify-center rounded-md border border-transparent px-4 py-2 text-sm font-medium text-white"
            >
                {{ __("Sign in") }}
            </x-button>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="rounded-md bg-white px-2 text-gray-600">
                            Or continue with
                        </span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-1">
                    <div>
                        <a
                            href="{{ url("auth/redirect") }}"
                            class="flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-8 py-3 text-sm font-medium text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-100"
                        >
                            <img
                                class="h-6 w-6"
                                src="https://www.svgrepo.com/show/506498/google.svg"
                                alt="google-svg"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
