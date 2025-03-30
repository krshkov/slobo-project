<x-layouts.guest>
    <div class="px-4 py-4 sm:mx-auto sm:w-full sm:max-w-lg sm:px-10 space-y-6">
        <!-- Profile Section -->
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4">
                <h2 class="text-lg font-bold text-orange-500">My Profiles</h2>
                <div class="mt-4">
                    <img class="w-full h-48 object-cover rounded-md"
                        src="{{ Vite::asset('resources/images/plumber.png') }}"
                        alt="Klaus Schneider working under a sink">
                </div>
                <div class="mt-4">
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center">
                        Klaus Schneider
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 ml-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </h3>
                    <div class="flex items-center mt-2 text-gray-600">
                        ⭐ <span class="ml-1">4.8</span>
                        <span class="ml-2">(38 reviews)</span>
                    </div>
                    <div class="mt-2">
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded">Available Now</span>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Heating</span>
                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Sanitary</span>
                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">A/C</span>
                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Solar systems</span>
                </div>
                <div class="mt-4 text-gray-600">
                    <p>Location: Rheda-Wiedenbrück</p>
                    <p>56 Completed orders</p>
                </div>
                <div class="mt-4">
                    <button class="w-full bg-yellow-500 text-white py-2 rounded">Add Section</button>
                </div>
                <div class="mt-2">
                    <button class="w-full bg-lime-500 text-white py-2 rounded">Pro Try</button>
                </div>
            </div>
        </div>

        <!-- About Me -->
        <div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-4">
            <!-- About me Section -->
            <div class="mb-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-bold text-gray-800">About me</h2>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-700"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 20h9m-9-4h6m-6-4h9m-9-4h6M5 8h.01M5 12h.01M5 16h.01" />
                        </svg>
                    </button>
                </div>
                <p class="mt-2 text-gray-600">
                    Lorem Ipsum Dolor Sit Amet Consectetur. Elit Eget Donec Ipsum a Bibendum Fermentum Velit. Vitae
                    Tincidunt Curabitur Dolor Ipsum Ipsum Accumsan Commodo.
                </p>
            </div>

            <!-- Service Section -->
            <div>
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-bold text-gray-800">Service</h2>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-700"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 20h9m-9-4h6m-6-4h9m-9-4h6M5 8h.01M5 12h.01M5 16h.01" />
                        </svg>
                    </button>
                </div>
                <p class="mt-2 text-gray-600">
                    Lorem Ipsum Dolor Sit Amet Consectetur. Elit Eget Donec Ipsum a Bibendum Fermentum Velit. Vitae
                    Tincidunt Curabitur Dolor Ipsum Ipsum Accumsan Commodo.
                </p>
            </div>
        </div>

        <!-- My Bookings -->
        <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg">
            <!-- Header -->
            <div class="px-6 py-4">
                <h2 class="font-bold text-xl text-gray-800">My bookings</h2>
                <p class="text-gray-600 text-sm">Only you can see this</p>
            </div>

            <!-- Tabs -->
            <div class="border-b border-gray-200">
                <ul class="flex">
                    <li class="mr-1">
                        <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded-t-lg font-semibold">New
                            Requests (1)</a>
                    </li>
                    <li class="mr-1">
                        <a href="#"
                            class="bg-gray-200 text-gray-600 py-2 px-4 rounded-t-lg font-semibold">Ongoing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="bg-gray-200 text-gray-600 py-2 px-4 rounded-t-lg font-semibold">Completed</a>
                    </li>
                </ul>
            </div>

            <!-- Booking Details -->
            <div class="px-6 py-4">
                <div class="font-bold text-lg text-gray-800 mb-2">Sanitary service request</div>
                <span class="text-orange-500 font-medium">Processing</span>

                <div class="mt-4 text-gray-700">
                    <p class="flex items-center">
                        📅 <span class="ml-2 font-semibold">Planned for Wednesday, 8th (tomorrow) at 9 a.m.</span>
                    </p>
                    <p class="flex items-center">
                        🔄 <span class="ml-2 font-semibold">Description</span>
                    </p>
                    <p class="flex items-center">
                        👤 <span class="ml-2 font-semibold">Anna Muller</span>
                    </p>
                </div>

                <!-- Actions -->
                <div class="mt-4 flex gap-4">
                    <button class="bg-orange-500 text-white py-2 px-4 rounded font-bold">Accept</button>
                    <button
                        class="bg-white text-orange-500 border border-orange-500 py-2 px-4 rounded font-bold">Refuse</button>
                </div>
            </div>

            <!-- Footer -->
            <div class="px-6 py-4">
                <a href="#" class="text-orange-500 font-semibold">Show all</a>
            </div>
        </div>

        <!-- My Listings -->
        <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-4">
            <!-- Header -->
            <div class="flex justify-between items-center border-b pb-2 mb-4">
                <h2 class="text-lg font-bold text-gray-800">My Listings</h2>
                <button class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                    Create Post
                </button>
            </div>

            <!-- Listing Preview -->
            <div class="bg-gray-100 p-4 rounded-lg shadow mb-4">
                <div class="flex items-start">
                    <img src="path/to/profile.jpg" alt="Klaus Schneider" class="w-16 h-16 rounded-full mr-4">
                    <div class="flex-grow">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-bold text-gray-800">Klaus Schneider</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-green-500 text-sm font-medium">Now available</span>
                        <div class="flex items-center mt-2 text-gray-600">
                            ⭐ <span class="ml-1">4.0</span>
                            <span class="ml-2">(38 reviews)</span>
                        </div>
                        <p class="mt-2 text-gray-600 text-sm">
                            I am free around noon to work... Lorem Ipsum placeholder text here for details.
                        </p>
                    </div>
                </div>
                <div class="text-gray-600 text-sm mt-2">Berlin, Germany</div>
                <div class="flex gap-4 mt-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Show Profile</button>
                    <button
                        class="bg-white border border-blue-500 text-blue-500 px-4 py-2 rounded hover:bg-blue-100">Contact</button>
                </div>
            </div>

            <!-- Footer -->
            <button class="w-full bg-yellow-500 text-white py-2 rounded hover:bg-yellow-600">
                Pro Try
            </button>
        </div>

        <!-- Current Work -->
        <div class="bg-white rounded-lg shadow p-4 mt-4">
            <h3 class="font-semibold">Current Work</h3>
            <div class="grid grid-cols-2 gap-2 mt-2">
                <img src="{{ asset('images/work1.jpg') }}" class="w-full rounded" alt="work image">
                <img src="{{ asset('images/work2.jpg') }}" class="w-full rounded" alt="work image">
            </div>
        </div>

        <!-- Customer Feedback -->
        <!-- Customer Feedback Section -->
        <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6">Customer feedback</h2>

            <!-- Feedback Cards -->
            @foreach (range(1, 3) as $index)
                <div class="flex items-start mb-6">
                    <!-- Profile Image -->
                    <img src="https://via.placeholder.com/64" alt="Franco Krause"
                        class="w-16 h-16 rounded-full mr-4">

                    <!-- Feedback Content -->
                    <div>
                        <h3 class="font-bold text-lg">Franco Krause</h3>
                        <p class="text-gray-500 text-sm">Southern Germany</p>
                        <!-- Star Ratings -->
                        <div class="flex items-center mt-2">
                            @for ($i = 0; $i < 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.174c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.286 3.965c.3.921-.755 1.688-1.538 1.118l-3.385-2.46a1 1 0 00-1.176 0l-3.385 2.46c-.783.57-1.838-.197-1.538-1.118l1.286-3.965a1 1 0 00-.364-1.118L2.34 9.392c-.783-.57-.381-1.81.588-1.81h4.174a1 1 0 00.95-.69l1.286-3.965z" />
                                </svg>
                            @endfor
                        </div>
                        <!-- Feedback Text -->
                        <p class="mt-2 text-gray-700">
                            Lorem Ipsum Dolor Sit Amet Consectetur. Eget Lectus Integer Sed Bibendum Faucibus Pulvinar.
                            Urna Justo Tempus Posuere Lectus Gravida.
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.guest>
