<x-app-layout>
    @section('title', 'Home')
    <x-success-message />
    <div class="md:container py-10 px-3 md:px-10">
        <x-partials.search :method="'GET'"/>
        <div class="flex items-center justify-evenly mt-10 flex-wrap md:space-y-5">
            @unless(count($blogs) < 0)
            @foreach ($blogs as $blog)
            <x-blog.blog-layout :blog="$blog">
                    <figure class="h-32 grid items-center">
                        <img src="{{ $blog->getImageURL() }}" alt="Blog Image" class="w-32">
                    </figure>
                    <p class="text-center">{{ $blog->title }}</p>
                    <p class="text-center">{{ $blog->user->name }}</p>
                    </figure>
                    <div>
                        <p class="line-clamp-4">
                            {{ $blog->content }}
                        </p>
                    </div>
                </x-blog.blog-layout>
                @endforeach
                @else
                <p class="text-center text-2xl">No Blogs Found</p>
                @endunless
        </div>
        <div class="mt-5 pagination">
            {{ $blogs->links() }} <!-- Display pagination links -->
        </div>
    </div>
</x-app-layout>
