<x-layouts.guest>
    <div class="px-4 py-4 sm:mx-auto sm:w-full sm:max-w-lg sm:px-10 text-center">
        <x-icon-checkmark class="m-auto"/>

        <h2 class="mt-2 font-bold">You are all set!</h2>
        <p class="text-gray-400 mt-4">Your profile is ready. Time to get started!</p>

        <a href="{{ route('dashboard.handyman') }}">
            <button
                class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Go to Dashboard
            </button>
        </a>
    </div>
</x-layouts.guest>
