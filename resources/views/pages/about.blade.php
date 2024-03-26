<x-guest-layout>
    @section('title', 'Home')
    <x-navigation></x-navigation>
    <x-hero.hero>
        <img src="{{ asset('images/home-hero.jpg') }}" alt="" class="object-cover h-96 w-full">
        <x-hero.inner>
            <h1 class="text-4xl font-semibold text-white">About Us</h1>
            <p class="text-white mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos assumenda
                error explicabo neque eligendi asperiores provident aliquam accusamus nemo, exercitationem voluptatibus
                architecto itaque ratione possimus quisquam sequi sunt a cum?</p>
        </x-hero.inner>
    </x-hero.hero>
    <section class="container py-10">
      
    </section>
</x-guest-layout>
