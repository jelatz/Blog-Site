<x-app-layout>
    @section('title', 'My Blog')
    <div class="container px-3 md:px-10 py-10">
        <x-success-message />
            <x-partials.search />
            <div class="flex-items-center justify-evenly mt-10">
                <x-blog.blog-layout>
                    @foreach ($blogs as $blog)
                        <figure>
                            <img src="{{ $blog->getImageURL() }}" alt="image" class="w-32 my-2">
                            <p class="text-center">{{ $blog->title }}</p>
                            <p class="text-center">{{ $blog->user->name }}</p>
                        </figure>
                        <div>
                            <p class="line-clamp-4">
                                {{ $blog->content }}
                            </p>
                        </div>
                    @endforeach
                </x-blog.blog-layout>
                <a href="{{route('blog.create')}}" class="mt-10 block ml-auto text-white bg-red-800 w-fit px-10 py-2 rounded-lg">New Blog</a>
        </div>
    </div>
</x-app-layout>