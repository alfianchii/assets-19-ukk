<nav id="navbar" class="fixed top-0 z-50 w-full transition-all duration-300 bg-transparent">
    <div class="container px-16 py-5 mx-auto">
        <div class="flex items-center justify-between">
            <div class="flex items-center me-24">
                <a href="/" class="flex items-center me-28">
                    <img class="h-10" src="{{ asset('assets/logo/high-resolutions/logo-rounded.png') }}" alt="logo">
                    <span id="navbar-logo-text"
                        class="text-lg font-bold text-black transition-all duration-300 ms-4">{{ config('app.name') }}</span>
                </a>

                <ul id="navbar-menu" class="flex items-center gap-x-10 text-battleship-grey">
                    <li class="text-sm font-medium transition-all duration-300 hover:text-royal-blue">
                        <a href="/#features">Feature</a>
                    </li>
                    <li class="text-sm font-medium transition-all duration-300 hover:text-royal-blue">
                        <a href="/#services">Service</a>
                    </li>
                    <li class="text-sm font-medium transition-all duration-300 hover:text-royal-blue">
                        <a href="/#reviews">Review</a>
                    </li>
                    <li class="text-sm font-medium transition-all duration-300 hover:text-royal-blue">
                        <a href="/#location">Location</a>
                    </li>
                </ul>
            </div>

            @auth
                <button id="action-dropdown" data-dropdown-toggle="dropdown"
                    class="text-midnight-blue bg-white hover:bg-white/80 focus:ring-4 focus:outline-none focus:ring-white/30 font-bold text-sm rounded-lg px-5 py-2.5 text-center inline-flex items-center transition-all duration-300 outline-none"
                    type="button">Welcome, {{ auth()->user()->full_name }}! <svg class="w-2.5 h-2.5 ms-3"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="action-dropdown">
                        <li>
                            <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf

                                <button type="submit" class="block w-full px-4 py-2 hover:bg-gray-100 text-start">Sign
                                    out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="flex items-center">
                    <a href="/login"
                        class="px-10 py-2 font-bold transition-all duration-300 bg-white rounded-lg hover:bg-white/80 text-midnight-blue">
                        Login
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
