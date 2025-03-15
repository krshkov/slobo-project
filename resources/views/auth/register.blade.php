<x-layouts.guest>
    <x-alerts.errors/>
    <x-alerts.status/>

    <div class="px-4 py-4 sm:mx-auto sm:w-full sm:max-w-lg sm:px-10">
        <x-icon-logo-xl class="m-auto"/>

        <div class="flex items-center justify-between mt-10">
            <p>
                <a href="#" class="font-medium">
                    Register as customer
                </a>
            </p>
            <p>
                <a href="#" class="text-primary font-medium">
                    Register as customer
                </a>
            </p>
        </div>

        <hr class="mt-5">

        <form method="POST" action="{{ route('register') }}" class="my-4 space-y-1">
            @csrf

            <div class="space-y-1 mt-5 relative">
                <x-icon-person class="absolute left-3 top-0 bottom-0 my-auto" />
                <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="name"
                       class="w-full px-4 py-3 pl-10 transition duration-150 ease-in-out border border-gray-300 rounded-xl appearance-none focus:outline-none focus:shadow-outline focus:border-orange-300"/>
            </div>

            <div class="space-y-1 mt-5 relative">
                <x-icon-mail class="absolute left-3 top-0 bottom-0 my-auto" />
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="e-mail"
                       class="w-full px-4 py-3 pl-10 transition duration-150 ease-in-out border border-gray-300 rounded-xl appearance-none focus:outline-none focus:shadow-outline focus:border-orange-300"/>
            </div>

            <div class="space-y-1 mt-5 relative">
                <x-icon-lock class="absolute left-3 top-0 bottom-0 my-auto" />
                <input type="password" name="password" required autocomplete="new-password" placeholder="password"
                       class="w-full px-4 py-3 pl-10 transition duration-150 ease-in-out border border-gray-300 rounded-xl appearance-none focus:outline-none focus:shadow-outline focus:border-orange-300"/>
            </div>

            <div class="space-y-1 mt-5 relative">
                <x-icon-lock class="absolute left-3 top-0 bottom-0 my-auto" />
                <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password"
                       class="w-full px-4 py-3 pl-10 transition duration-150 ease-in-out border border-gray-300 rounded-xl appearance-none focus:outline-none focus:shadow-outline focus:border-orange-300"/>
            </div>

            <div class="space-y-1 mt-5 relative">
                <x-icon-phone class="absolute left-3 top-0 bottom-0 my-auto" />
                <input type="text" name="phone" value="{{ old('phone') }}" required autofocus autocomplete="phone" placeholder="Telephone number"
                       class="w-full px-4 py-3 pl-10 transition duration-150 ease-in-out border border-gray-300 rounded-xl appearance-none focus:outline-none focus:shadow-outline focus:border-orange-300"/>
            </div>

            <div class="flex items-end justify-between pt-4">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}"
                       class="text-orange-600 transition duration-150 ease-in-out hover:text-orange-400 focus:outline-none focus:underline">
                        {{ __('Already registered?') }}
                    </a>
                @endif

                <button type="submit"
                        class="flex justify-center w-1/2 py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                    {{ __('Register') }}
                </button>
            </div>

        </form>
    </div>
</x-layouts.guest>
