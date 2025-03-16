<x-layouts.guest>
    <div class="px-4 py-4 sm:mx-auto sm:w-full sm:max-w-lg sm:px-10">
        <h4>What’s your industry?</h4>
        <p class="mt-2 text-gray-500">Pick the main category of your work.</p>

        <div class="mt-10 flex flex-col gap-3">
            <div class="flex justify-evenly gap-3">
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-home_repair/>
                    <h6 class="mt-3">Home Repair</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-windows/>
                    <h6 class="mt-3">Windows</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-painter/>
                    <h6 class="mt-3">Painter</h6>
                </div>
            </div>
            <div class="flex justify-evenly gap-3">
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-electrician/>
                    <h6 class="mt-3">Electrician</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-air_conditioning/>
                    <h6 class="mt-3">A / C</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-flooring/>
                    <h6 class="mt-3">Flooring</h6>
                </div>
            </div>
            <div class="flex justify-evenly gap-3">
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-plumber/>
                    <h6 class="mt-3">Plumber</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-carpenter/>
                    <h6 class="mt-3">Carpenter</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-construction/>
                    <h6 class="mt-3">Construction</h6>
                </div>
            </div>
        </div>

        <form id="industry-form" action="{{ route('choose.put.industry') }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" id="industry-input" name="industry" hidden/>
            <button type="submit"
                    class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Continue
            </button>
        </form>
    </div>
</x-layouts.guest>

<script>
    let form = document.getElementById('industry-form');
    let input = document.getElementById('industry-input');

    document.querySelectorAll('.industry-picker').forEach((picker) => {
        picker.addEventListener('click', () => {
            input.value = picker.querySelector('h6').innerText;

            let pre_selected = document.querySelector('.industry-picker.border-primary');
            pre_selected?.classList.remove('border-primary');
            pre_selected?.classList.add('border-gray-200');

            // Set border color for the selected picker
            picker.classList.remove('border-gray-200');
            picker.classList.add('border-primary');
        });
    });
</script>
