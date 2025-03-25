<nav>
    <div class="pt-5 bg-white-500 flex justify-between items-center max-h-10 h-full">
        <button>
            <a href="/">
                <x-icon-logo/>
            </a>
        </button>

        <button id="nav-btn" class="block md:hidden">
            <x-icon-burger id="burger"/>
            <x-icon-x id="xbtn" class="hidden"/>
        </button>

        <ul class="hidden md:flex gap-10">
            <li>
                <a href="{{ route('services') }}" class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">Search</a>
            </li>
            <li>
                <a href="#" class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">Advise</a>
            </li>
            @if(auth()->check() && auth()->user()->is_handyman())
                <li>
                    <a href="{{ route('dashboard.handyman') }}"
                       class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">Dashboard</a>
                </li>
            @endif
            @if(!auth()->check())
                <li>
                    <a href="/register"
                       class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">
                        Register
                    </a>
                </li>
                <li>
                    <a href="/login"
                       class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">
                        Login
                    </a>
                </li>
            @else
                <li>
                    <a id="logout-trigger"
                       class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500 cursor-pointer">
                        Logout
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <div id="mobile-menu" class="hidden absolute w-full text-center py-5 mt-1 bg-white-500 opacity-85">
        <ul class="flex flex-col gap-5">
            <li>
                <a href="{{ route('services') }}" class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">
                    <h3>Search</h3>
                </a>
            </li>
            <li>
                <a href="#" class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">
                    <h3>Advise</h3>
                </a>
            </li>
            @if(auth()->check() && auth()->user()->is_handyman())
                <li>
                    <a href="{{ route('dashboard.handyman') }}"
                       class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">
                        <h3>Handyman</h3>
                    </a>
                </li>
            @endif
            @if(!auth()->check())
                <li>
                    <a href="/register"
                       class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">
                        <h3>Register</h3>
                    </a>
                </li>
                <li>
                    <a href="/login"
                       class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">
                        <h3>Login</h3>
                    </a>
                </li>
            @else
                <li>
                    <a id="logout-trigger"
                       class="text-gray-400 font-medium hover:text-primary active:text-primary hover:duration-500">
                        <h3>Logout</h3>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>

<form id="logout-form" method="POST" action="{{ route('logout') }}">
    @csrf
</form>

<script>
    // Logout Script
    let logoutTrigger = document.getElementById('logout-trigger');
    let logoutForm = document.getElementById('logout-form');

    logoutTrigger.addEventListener('click', (e) => {
        e.preventDefault()
        logoutForm.submit();
    });

    // Mobile Nav
    let triggerBtn = document.getElementById('nav-btn');
    let burgerBtn = document.querySelector('#nav-btn svg#burger');
    let closeBtn = document.querySelector('#nav-btn svg#xbtn');
    let mobileMenu = document.getElementById('mobile-menu');

    triggerBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        burgerBtn.classList.toggle('hidden');
        closeBtn.classList.toggle('hidden');
    });
</script>
