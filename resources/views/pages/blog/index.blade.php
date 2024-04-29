<x-app-layout>
    @section('title', 'My Blog')
    <div class="container px-3 md:px-10 py-10">
        <x-success-message />
            <x-partials.search />
            <div class="flex items-center justify-evenly mt-10 flex-wrap">
                @foreach ($blogs as $blog)
                <x-blog.blog-layout :blog="$blog">
                        <figure class="h-32 grid items-center">
                            <img src="{{ $blog->getImageURL() }}" alt="image" class="w-32">
                        </figure>
                        <p class="text-center">{{ $blog->title }}</p>
                        <p class="text-center">{{ $blog->user->name }}</p>
                        <div>
                            <p class="line-clamp-4">
                                {{ $blog->content }}
                            </p>
                        </div>
                    </x-blog.blog-layout>
                    @endforeach
                </div>
                <div class="mt-5 pagination">
                    {{ $blogs->links() }}
                </div>
            
                <a href="{{route('create')}}" class="mt-10 block ml-auto text-white bg-red-800 w-fit px-10 py-2 rounded-lg">New Blog</a>
    </div>
</x-app-layout>