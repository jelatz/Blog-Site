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
        <div class="flex w-full justify-center md:justify-between items-center gap-y-10">
            @foreach($blogs as $blog)
            <x-blog.blog-layout :blog="$blog">
                <figure class="w-full md:w-1/4 text-center">
                    <img src="{{$blog->getImageURL()}}" alt="Sample Image" class="h-34 w-80 mx-auto">
                    <p class="text-center pt-2">{{$blog->title}}</p>
                    <p class="text-center">{{$blog->user->name}}</p>
                </figure>
                <div class="w-full md:3/4">
                    <p class="line-clamp-5">
                        {{ $blog->content }}   
                    </p>
                    <blockquote class="text-start mt-2">{{$blog->user->name}}</blockquote>
                </div>
            </x-blog.blog-layout>
            @endforeach
        </div>
    </section>
</x-guest-layout>
