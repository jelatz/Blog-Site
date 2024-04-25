<x-app-layout>
    <div class="container py-16">
        <x-header-title title="Create Blog" class="mb-5"/>
        <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <x-blog.blog-logo src="{{$blog->getImageURL()}}" class="mx-auto"/>
            <div class="my-3">
                <x-forms.label :for="'title'" :label="'Title'" class="text-xl text-center"/>
                <x-forms.input name="title" class="md:w-[60%] md:h-fit md:text-center mx-auto text-xl" value="{{old('title')}}"/>
                @error('title')
                    <p class="text-red-500 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <x-forms.label :for="'content'" :label="'Content'" class="text-xl text-center"/>
                <x-forms.textArea name="content" id="content" class="md:w-[60%] mx-auto text-xl" value="{{old('content')}}"/>
                @error('content')
                    <p class="text-red-500 text-center">{{$message}}</p>
                @enderror
            </div>
            <x-forms.submitButton class="w-full md:w-fit mx-auto">
                Create Blog
            </x-forms.submitButton >
        </form>
    </div>
</x-app-layout>