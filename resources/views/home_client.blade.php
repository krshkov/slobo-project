<x-layouts.guest>
    <header>
        <div>
            <small>For artisans</small>
            <x-icon-toggle-right/>
            <small>For customers</small>
        </div>

        <h2>Handwerker leicht gemacht</h2>
        <p>All the services you need in one place.</p>

        <div>
            {{--<img src="" alt="">--}}
            {{--<img src="" alt="">--}}
            {{--<img src="" alt="">--}}
        </div>
        <div>
            <button>Anfrage Posten</button>
            <button>Hausmeister Finden</button>
        </div>
        <form action="" method="get"></form>
    </header>

    <section>
        <h3>Why people like us</h3>
        <x-icon-brushed/>
        <div>
            <div>
                <x-icon-check-sm/>
                <p>No hidden costs: only a transparent monthly fee.</p>
            </div>
            <div>
                <x-icon-check-sm/>
                <p>Targeted orders: Find jobs that fit your skills.</p>
            </div>
            <div>
                <x-icon-check-sm/>
                <p>Immediate bookings: Communicate directly with customers in chat.</p>
            </div>
        </div>
    </section>

    <section>
        <h3>What you can offer</h3>
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
    </section>

    <section>
        <h3>Craftsmen grow faster with our app!</h3>
        <div>
            <div>
                <div>
                    <p>€ 1000 Additional Income</p>
                </div>
                <div>
                    {{--<img src="" alt="">--}}
                </div>
                <div>
                    <p>Marcus Shmidt</p>
                    <div>
                        <span>Heating</span>
                        <span>Sanitary</span>
                        <span>A/C</span>
                    </div>
                    <span>
                        <x-icon-location/>
                        <p>Ingolstadt</p>
                    </span>
                </div>
            </div>
            <div>
                <div>
                    <p>€ 1000 Additional Income</p>
                </div>
                <div>
                    {{--<img src="" alt="">--}}
                </div>
                <div>
                    <p>Marcus Shmidt</p>
                    <div>
                        <span>Heating</span>
                        <span>Sanitary</span>
                        <span>A/C</span>
                    </div>
                    <span>
                        <x-icon-location/>
                        <p>Ingolstadt</p>
                    </span>
                </div>
            </div>
        </div>
        <a href="{{ route('register') }}">
            <button
                class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Register now
            </button>
        </a>
    </section>

    <section>
        <h3>Instant messaging for effortless booking</h3>
        <div>
            {{--<img src="" alt="">--}}
        </div>
        <div>
            <div>
                <x-icon-list-prim/>
                <h5>Create your profile</h5>
                <p>Create your profile, set your availability and present your services.</p>
            </div>
            <div>
                <x-icon-gallery-prim/>
                <h5>Find jobs & be booked</h5>
                <p>Browse available orders near you and contact potential customers.</p>
            </div>
            <div>
                <x-icon-puzzle-prim/>
                <h5>Chat & Buchen</h5>
                <p>Clarify details directly via our app and get secure bookings.</p>
            </div>
        </div>
    </section>

    <section>
        <h3>Neu beigetreten, bereit zu helfen!</h3>

        <div>
            <div>
                <div>
                    {{--<img src="" alt="">--}}
                </div>
                <p>Peter Schmidt
                    <x-icon-verified/>
                </p>
                <small>Elektriker</small>
            </div>
            <div>
                <div>
                    {{--<img src="" alt="">--}}
                </div>
                <p>Hans Müller
                    <x-icon-verified/>
                </p>
                <small>Schlosser</small>
            </div>
            <div>
                <div>
                    {{--<img src="" alt="">--}}
                </div>
                <p>Jan Sebastiant
                    <x-icon-verified/>
                </p>
                <small>Elektriker</small>
            </div>
        </div>

        <a href="{{ route('register') }}">
            <button
                class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Register now
            </button>
        </a>
    </section>

    <section>
        <div>
            <x-icon-quotes/>
            <h3>Real experiences, real success</h3>
            <p>Find out how craftsmen get more orders with our app, increase your income and expand your business .</p>
        </div>
        <div>
            <div>
                <div>
                    <div>
                        {{--<img src="" alt="">--}}
                    </div>
                    <div>
                        <p>Maximilian Schneider</p>
                        <a href="#">
                            <small>Electrician, Dresden</small>
                        </a>
                    </div>
                </div>
                <div>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                </div>
                <p>Die App hat es einfach gemacht, einen Tischler zu finden. Er hat meinen Kleiderschrank und meinen
                    Badezimmer-Schrank gebaut, und sie sehen fantastisch aus!</p>
                <div>
                    {{--<img src="" alt="">--}}
                    {{--<img src="" alt="">--}}
                    {{--<img src="" alt="">--}}
                    {{--<img src="" alt="">--}}
                </div>
            </div>
            <div>
                <div>
                    <div>
                        {{--<img src="" alt="">--}}
                    </div>
                    <div>
                        <p>John Meier</p>
                        <a href="#">
                            <small>Tischler, Berlin</small>
                        </a>
                    </div>
                </div>
                <div>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                </div>
                <p>Dank dieser App konnte ich meine Fenster schnell und effizient austauschen lassen. Der Service war
                    professionell und der Prozess reibungslos!</p>
                <div>
                    {{--<img src="" alt="">--}}
                </div>
            </div>
            <div>
                <div>
                    <div>
                        {{--<img src="" alt="">--}}
                    </div>
                    <div>
                        <p>Peter Schmidt</p>
                        <a href="#">
                            <small>Painter, Munich</small>
                        </a>
                    </div>
                </div>
                <div>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                </div>
                <p>Die App hat mir geholfen, einen Maler zu finden. Mein Wohnzimmer sieht jetzt perfekt aus! </p>
                <div>
                    {{--<img src="" alt="">--}}
                    {{--<img src="" alt="">--}}
                    {{--<img src="" alt="">--}}
                    {{--<img src="" alt="">--}}
                </div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h3>Finde und buche zuverlässige Handwerker</h3>
            <x-icon-brushed/>
        </div>
        <div>
            <div>
                {{--<img src="" alt="">--}}
            </div>
            <div>
                {{--<img src="" alt="">--}}
            </div>
            <div>
                {{--<img src="" alt="">--}}
            </div>
            <div>
                {{--<img src="" alt="">--}}
            </div>
            <div>
                <x-icon-person/>
                ...
            </div>
        </div>

        <p>Schließe dich über 10.000 zufriedenen Haushalten und Unternehmen an, die uns vertrauen, um erfahrene Profis
            zu finden. Chatten, planen und erledigen – alles an einem Ort.</p>

        <a href="{{ route('register') }}">
            <button
                class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Register now
            </button>
        </a>
    </section>
</x-layouts.guest>
