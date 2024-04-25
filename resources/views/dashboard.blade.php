<x-app-layout>
    @section('title', 'Home')
    <x-success-message />
    <div class="md:container py-10 px-3 md:px-10">
        <x-partials.search />
        <div class="flex-items-center justify-evenly mt-10">
            <x-blog.blog-layout>
                @foreach ($blogs as $blog)
                    <figure>
                        <img src="{{ $blog->getImageURL() }}" alt="Blog Image" class="w-32 my-2">
                        <p class="text-center">{{ $blog->title }}</p>
                        <p class="text-center">{{ $blog->user->name }}</p>
                    </figure>
                    </figure>
                    <div>
                        <p class="line-clamp-4">
                            {{ $blog->content }}
                        </p>
                    </div>
                @endforeach
            </x-blog.blog-layout>
        </div>
    </div>
</x-app-layout>
