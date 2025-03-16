<x-layouts.guest>
    <header>
        <div>
            <small>For artisans</small>
            <x-icon-toggle-left />
            <small>For customers</small>
        </div>

        <h2>More orders.</h2>
        <h2>More sales</h2>
        <p>Show your skills and win new customers .</p>
        <div>
            {{--<img src="" alt="">--}}
            {{--<img src="" alt="">--}}
            {{--<img src="" alt="">--}}
        </div>
        <div>
            <button>Find jobs</button>
            <button>Register now</button>
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
        <h3>Latest job offers - access now!</h3>
        <div>
            <div>
                <div>
                    <div>
                        {{--<img src="" alt="">--}}
                    </div>
                    <div>
                        <h5>Anna Müller</h5>
                        <p>Trustworthy</p>
                    </div>
                    <div>
                        <span>URGENT</span>
                        <button>
                            <x-icon-bookmark/>
                            <span>Chat</span>
                        </button>
                    </div>
                </div>
                <div>
                    <h5>Repair a leaky tube</h5>
                    <small>3 days ago</small>
                </div>
                <div>
                    <p>Localize the source of the leak, place the water supply from ..</p>
                    <div>
                        <x-icon-location/>
                        <p>Berlin, Germany</p>
                    </div>
                    <div>
                        <p>address</p>
                        <a href="#">Show on map</a>
                    </div>
                </div>
                <div>
                    <button
                        class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                        Contact
                    </button>
                </div>
                <div>
                    <button>
                        <x-icon-arrow-down/>
                    </button>
                </div>
            </div>
        </div>
        <button
            class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
            Find jobs
        </button>
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
                <p>Since I used this platform, I have doubled my orders!</p>
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
                <p>I can use my free time perfectly to get additional jobs .</p>
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
                <p>Super easy handling and direct contact with customers!</p>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h3>More customers.</h3>
            <h3>More orders.</h3>
            <h3>More sales.</h3>
            <x-icon-brushed />
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
                <x-icon-person />
                ...
            </div>
        </div>

        <p>Use the opportunity to make your services known, to receive more orders and to work flexibly. Register now and start directly!</p>

        <a href="{{ route('register') }}">
            <button
                class="cursor-pointer mt-10 flex justify-center w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Register now
            </button>
        </a>
    </section>
</x-layouts.guest>
