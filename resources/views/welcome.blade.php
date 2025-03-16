<x-layouts.guest>
    <div class="px-4 py-4 sm:mx-auto sm:w-full sm:max-w-lg sm:px-10 text-center">
        <x-icon-logo-xl class="m-auto"/>

        <h4 class="font-bold">Welcome to FixDas</h4>
        <p class="text-gray-400 mt-4">Let’s set up your profile! Choose your expertise so clients can find you
            easily.</p>

        <a href="{{ route('choose.industry') }}">
            <button
                    class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Continue
            </button>
        </a>
    </div>
</x-layouts.guest>
