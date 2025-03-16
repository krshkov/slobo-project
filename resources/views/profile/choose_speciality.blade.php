<x-layouts.guest>
    <div class="px-4 py-4 sm:mx-auto sm:w-full sm:max-w-lg sm:px-10">
        <h4>What’s your Specialty?</h4>
        <p class="mt-2 text-gray-500">Select Your Specific Skill. You can always edit your preferences in your profile
            settings .</p>

        <form id="speciality-form" action="{{ route('choose.put.speciality') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mt-5 flex flex-col gap-2">
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="electrical_installation" name="speciality[]"
                           value="Electrical installation">
                    <label for="electrical_installation">Electrical installation</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="sanitary_installation" name="speciality[]" value="Sanitary installation">
                    <label for="sanitary_installation">Sanitary installation</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="painting_work" name="speciality[]" value="Painting and painting work">
                    <label for="painting_work">Painting and painting work</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="carpentry" name="speciality[]" value="Carpentry/carpentry">
                    <label for="carpentry">Carpentry/carpentry</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="roofing" name="speciality[]" value="Roofing">
                    <label for="roofing">Roofing</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="heating_installation" name="speciality[]" value="Heating installation">
                    <label for="heating_installation">Heating installation</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="tile_work" name="speciality[]" value="Tile work">
                    <label for="tile_work">Tile work</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="bricklaying" name="speciality[]" value="Bricklaying">
                    <label for="bricklaying">Bricklaying</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="garden_landscaping" name="speciality[]" value="Garden and landscaping">
                    <label for="garden_landscaping">Garden and landscaping</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="locksmith_work" name="speciality[]" value="Locksmith work">
                    <label for="locksmith_work">Locksmith work</label>
                </div>
            </div>

            <button type="submit"
                    class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Continue
            </button>
        </form>
    </div>
</x-layouts.guest>
