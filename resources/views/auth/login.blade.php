<x-layouts.guest>
    <x-alerts.errors />
    <x-alerts.status />

    <div class="px-4 py-4 sm:mx-auto sm:w-full sm:max-w-lg sm:px-10">
        <h3>Welcome back</h3>
        <p>Register with your account</p>

        <form method="POST" action="{{ route('login') }}" class="my-4 space-y-2">
            @csrf

            <div class="space-y-1 relative">
                <x-icon-mail class="absolute left-3 top-0 bottom-0 my-auto" />
                <input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" placeholder="e-mail"
                    class="w-full px-4 py-3 pl-10 transition duration-150 ease-in-out border border-gray-300 rounded-xl appearance-none focus:outline-none focus:shadow-outline focus:border-orange-300" />
            </div>

            <div class="space-y-1 relative">
                <x-icon-lock class="absolute left-3 top-0 bottom-0 my-auto" />
                <input type="password" name="password" required autocomplete="current-password" placeholder="password"
                    class="w-full px-4 py-3 pl-10 transition duration-150 ease-in-out border border-gray-300 rounded-xl appearance-none focus:outline-none focus:shadow-outline focus:border-orange-300" />
            </div>

            <div class="flex items-end justify-between py-2">
                <div class="flex items-center">
                    <input type="checkbox" name="remember"
                        class="w-4 h-4 text-orange-500 transition duration-150 ease-in-out focus:outline-none focus:shadow-outline focus:border-orange-300">
                    <label for="remember_me" class="ml-2 text-gray-500 ">{{ __('Remember me') }}</label>
                </div>

                <button type="submit"
                    class="flex justify-center w-1/2 py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                    class="text-orange-600 transition duration-150 ease-in-out hover:text-orange-400 focus:outline-none focus:underline">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="text-orange-600 transition duration-150 ease-in-out hover:text-orange-400 focus:outline-none focus:underline">
                    {{ __('Not registered?') }}
                </a>
                @endif
            </div>

        </form>
    </div>
</x-layouts.guest>
