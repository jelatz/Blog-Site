<x-guest-layout>
    <x-navigation></x-navigation>
    <x-hero.hero>
        <img src="{{asset('images/home-hero.jpg')}}" alt="" class="object-cover h-96 w-full">
        <x-hero.inner>
            <h1 class="text-4xl font-semibold text-white">Sample Title</h1>
            <p class="text-white mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos assumenda error explicabo neque eligendi asperiores provident aliquam accusamus nemo, exercitationem voluptatibus architecto itaque ratione possimus quisquam sequi sunt a cum?</p>
        </x-hero.inner>
    </x-hero.hero>
    <section class="container md:w-[1200px] py-10">
        <div class="flex flex-wrap justify-center md:justify-between items-center gap-y-10">
            <x-blog.blog-layout>
                <h1>Title</h1>
                <img src="#" alt="Sample Image">
                <p class="line-clamp-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae quidem ut ipsa corporis officiis!</p>
            </x-blog.blog-layout>
            <x-blog.blog-layout>
                <h1>Title</h1>
                <img src="#" alt="Sample Image">
                <p class="line-clamp-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae quidem ut ipsa corporis officiis!</p>
            </x-blog.blog-layout>
            <x-blog.blog-layout>
                <h1>Title</h1>
                <img src="#" alt="Sample Image">
                <p class="line-clamp-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae quidem ut ipsa corporis officiis!</p>
            </x-blog.blog-layout>
            <x-blog.blog-layout>
                <h1>Title</h1>
                <img src="#" alt="Sample Image">
                <p class="line-clamp-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt totam eligendi iusto sed. Temporibus repellat possimus consectetur assumenda. Vel quo cupiditate voluptas commodi quae vitae quidem ut ipsa corporis officiis!</p>
            </x-blog.blog-layout>
        </div>
    </section>
</x-guest-layout>
