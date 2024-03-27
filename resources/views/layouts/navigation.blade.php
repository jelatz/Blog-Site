<nav class="bg-gray-800 p-4">
    <div class="flex justify-between items-center">
        <!-- Logo -->
      <x-logo></x-logo>

        <!-- Hamburger menu for mobile -->
        <button id="menu-toggle" class="text-white focus:outline-none md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Navigation links -->
        <div id="menu" class="hidden md:flex space-x-20">
            <a href="{{ route('home') }}" class="text-white hover:text-red-800 {{ request()->routeIs('home') ? 'underline-offset-8 underline' : '' }}">Home</a>
            <a href="{{route('about')}}" class="text-white hover:text-red-800 {{request()->routeIs('about') ? 'underline-offset-8 underline' : ''}}">About Us</a>
            <a href="{{route('blogs')}}" class="text-white hover:text-red-800 {{request()->routeIs('blogs') ? 'underline-offset-8 underline' : ''}}">Blogs</a>
            <a href="{{route('contact-us')}}" class="text-white hover:text-red-800 {{request()->routeIs('contact-us') ? 'underline-offset-8 underline' : ''}}">Contact Us</a>
        </div>
    </div>
</nav>

<!-- Dropdown menu for mobile -->
<div id="mobile-menu" class="md:hidden hidden bg-gray-800 transition duration-1000 ease-in-out ">
    <div class="container mx-auto text-center">
        <a href="#" class="block text-white hover:text-white py-2 transition duration-500 ease-in-out hover:bg-red-800">Home</a>
        <a href="#" class="block text-white hover:text-white py-2 transition duration-500 ease-in-out hover:bg-red-800">About Us</a>
        <a href="#" class="block text-white hover:text-white py-2 transition duration-500 ease-in-out hover:bg-red-800">Blogs</a>
        <a href="#" class="block text-white hover:text-white py-2 transition duration-500 ease-in-out hover:bg-red-800">Contact Us</a>
    </div>
</div>
