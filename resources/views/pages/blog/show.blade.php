<x-app-layout>
    @section('title', 'Blog Title')
        <div class="container px-3 md:px-10 py-10">
            <a href="{{(!auth()->user()) ? route('home') : route('blog') }}" class="text-white rounded-full bg-red-800 px-4 py-2 leading-tight my-3 flex items-center w-fit"><ion-icon name="arrow-back"></ion-icon> Back
            </a>
            <x-success-message />
            <div class="flex flex-col justify-center items-center">
                <img class="w-48 mr-6 mb-6" src="{{$blog->getImageURL()}}" alt="Blog Image" />
                <h1 class="text-2xl font-semibold">{{$blog->title}}</h1>
                <p class="text-lg">{{$blog->user->name}}</p>
                <p>{{$blog->content}}</p>
            </div>
            <div class="flex items-center gap-x-5">
                <a href="{{route('blog.edit', $blog)}}" class="text-white rounded-full bg-red-800 px-4 py-2 leading-tight my-3 flex items-center w-fit">
                    Edit Blog
                </a>
                <form method="POST" action="{{route('blog.delete', ['blog'=> $blog->id])}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-white rounded-full bg-red-800 px-4 py-2 leading-tight my-3 flex items-center w-fit">
                        Delete Blog
                    </button>
                </form>
            </div>
        </div>
</x-app-layout>
