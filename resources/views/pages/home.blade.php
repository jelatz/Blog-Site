<x-guest-layout>
    @section('title', 'Home')
    <x-success-message />

    <x-hero.hero>
        <img src="{{ asset('images/home-hero.jpg') }}" alt="" class="object-cover h-96 w-full">
        <x-hero.inner>
            <h1 class="text-4xl font-semibold text-white">Latest Blogs</h1>
        </x-hero.inner>
    </x-hero.hero>
    <section class="container py-10">
        <div class="flex flex-col w-full justify-center md:justify-between items-center gap-y-10">
            <x-blog.blog-layout>
                <figure class="w-full md:w-1/4 text-center">
                    <img src="{{ asset('images/home-hero.jpg') }}" alt="Sample Image" class="h-34 w-80 mx-auto">
                    <p class="text-center pt-2">Blog Title</p>
                </figure>
                <div class="w-full md:3/4">
                    <p class="line-clamp-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Deserunt totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo
                        cupiditate voluptas commodi quae vitae quidem ut ipsa corporis officiis!Lorem ipsum dolor sit amet
                        consectetur, adipisicing elit. Deserunt totam eligendi iusto sed. Temporibus repellat possimus
                        consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae quidem ut ipsa corporis
                        officiis!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt totam eligendi iusto sed.
                        Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae
                        quidem ut ipsa corporis officiis!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt
                        totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate
                        voluptas commodi quae vitae quidem ut ipsa corporis officiis!    
                    </p>
                    <blockquote class="text-start mt-2">Author name</blockquote>
                </div>
            </x-blog.blog-layout>
            <x-blog.blog-layout>
                <figure class="w-full md:w-1/4 text-center">
                    <img src="{{ asset('images/home-hero.jpg') }}" alt="Sample Image" class="h-34 w-80 mx-auto">
                    <p class="text-center pt-2">Blog Title</p>
                </figure>
                <div class="w-full md:3/4">
                    <p class="line-clamp-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Deserunt totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo
                        cupiditate voluptas commodi quae vitae quidem ut ipsa corporis officiis!Lorem ipsum dolor sit amet
                        consectetur, adipisicing elit. Deserunt totam eligendi iusto sed. Temporibus repellat possimus
                        consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae quidem ut ipsa corporis
                        officiis!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt totam eligendi iusto sed.
                        Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae
                        quidem ut ipsa corporis officiis!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt
                        totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate
                        voluptas commodi quae vitae quidem ut ipsa corporis officiis!    
                    </p>
                    <blockquote class="text-start mt-2">Author name</blockquote>
                </div>
            </x-blog.blog-layout>
            <x-blog.blog-layout>
                <figure class="w-full md:w-1/4 text-center">
                    <img src="{{ asset('images/home-hero.jpg') }}" alt="Sample Image" class="h-34 w-80 mx-auto">
                    <p class="text-center pt-2">Blog Title</p>
                </figure>
                <div class="w-full md:3/4">
                    <p class="line-clamp-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Deserunt totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo
                        cupiditate voluptas commodi quae vitae quidem ut ipsa corporis officiis!Lorem ipsum dolor sit amet
                        consectetur, adipisicing elit. Deserunt totam eligendi iusto sed. Temporibus repellat possimus
                        consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae quidem ut ipsa corporis
                        officiis!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt totam eligendi iusto sed.
                        Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae
                        quidem ut ipsa corporis officiis!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt
                        totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate
                        voluptas commodi quae vitae quidem ut ipsa corporis officiis!    
                    </p>
                    <blockquote class="text-start mt-2">Author name</blockquote>
                </div>
            </x-blog.blog-layout>
        </div>
    </section>
</x-guest-layout>
