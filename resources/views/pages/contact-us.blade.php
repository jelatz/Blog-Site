<x-guest-layout>
    @section('title', 'Contact Us')
    <x-hero.hero>
        <img src="{{ asset('images/home-hero.jpg') }}" alt="" class="object-cover h-96 w-full">
        <x-hero.inner>
            <h1 class="text-4xl font-semibold text-white">Contact Us</h1>
        </x-hero.inner>
    </x-hero.hero>
    <section>
        <div class="container py-10">
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <x-forms.label>Sample</x-forms.label>
                    <x-forms.input type="text" placeholder="Enter your name" />
                </div>
            </form>
        </div>
    </section>
</x-guest-layout>