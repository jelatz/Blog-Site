<nav class="md:px-5 px-2 py-4 bg-red-800">
    <div class="flex justify-between items-center">
        <!-- Logo -->
        @guest
            <x-logo :href="route('home')" />
        @endguest

        @auth()
            <x-logo :href="route('dashboard')" />
        @endauth
        <!-- Hamburger menu for mobile -->
        <button id="menu-toggle" class="focus:outline-none md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div id="menu" class="hidden md:flex space-x-3">
            @guest
                <a href="{{ route('login') }}"
                    class=" text-white transition ease-out duration-300 hover:underline {{ request()->routeIs('login') ? 'underline-offset-8 underline' : '' }}">Login</a>
                <a href="{{ route('register') }}"
                    class="text-white transition ease-out duration-300 hover:underline {{ request()->routeIs('register') ? 'underline-offset-8 underline' : '' }}">Register</a>
            @endguest
            @auth()
                @if (Auth::user()->hasVerifiedEmail())
                    <a href="{{ route('dashboard') }}" class="text-white leading-8">Home</a>
                    <a href="{{route('blog')}}" class="text-white leading-8">MyBlog</a>
                    <x-dropdown :src="auth()->user()->getImageURL()">
                        {{ Auth::user()->name }}
                        <div class="absolute text-black w-[200px] top-12 -right-1 space-y-1 bg-neutral-200 z-50 py-2 hidden"
                            id="dropdown-menu">
                            <a href="{{ route('profile') }}" class="hover:text-red-800 hover:underline">Edit Profile</a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" class="hover:underline hover:text-red-800" value="Logout">
                            </form>
                        </div>
                    </x-dropdown>
                @endif
            @endauth()
        </div>
    </div>
</nav>

<!-- Dropdown menu for mobile -->
<div id="mobile-menu"
    class="md:hidden hidden transition duration-1000 ease-in-out absolute top-50 left-50 z-50  w-full bg-white">
    <div class="text-center flex flex-col justify-center items-center">
        @guest
            <a href="{{ route('login') }}"
                class="py-3 hover:bg-red-800 transition ease-out duration-300 w-full hover:text-white hover:underline {{ request()->routeIs('login') ? 'underline-offset-8 underline' : '' }}">Login</a>
            <a href="{{ route('register') }}"
                class="py-3 hover:bg-red-800 transition ease-out duration-300 w-full hover:text-white hover:underline` {{ request()->routeIs('register') ? 'underline-offset-8 underline' : '' }}">Register</a>
        @endguest
        @auth()
            <a href="{{ route('dashboard') }}"
                class="py-3 hover:bg-red-800 transition ease-out duration-300 w-full hover:text-white hover:underline">Dashboard</a>
            <a href="#"
                class="py-3 hover:bg-red-800 transition ease-out duration-300 w-full hover:text-white hover:underline">MyBlog</a>
            <a href="{{ route('profile') }}"
                class="py-3 hover:bg-red-800 transition ease-out duration-300 w-full hover:text-white hover:underline {{ request()->routeIs('profile') ? 'underline-offset-8 underline' : '' }}">Edit
                Profile</a>
            <form action="{{ route('logout') }}" method="post" class="w-full">
                @csrf
                <button type="submit"
                    class="py-3 hover:bg-red-800 transition ease-out duration-300 w-full hover:text-white hover:underline">Logout</button>
            </form>
        @endauth()
    </div>
</div>
