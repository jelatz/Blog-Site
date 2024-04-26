<x-app-layout>
    @section('title', 'Edit')
    <div class="pt-5 px-5 md:container">
        <a href="{{ route('blog') }}" class="text-white rounded-full bg-red-800 px-4 py-2 leading-tight my-3 flex items-center w-fit"><ion-icon name="arrow-back"></ion-icon> Back
        </a>
        <x-header-title title="Edit Blog" class="mb-5"/>
        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <x-blog.blog-logo src="{{$blog->getImageURL()}}" class="mx-auto"/>
            <div class="my-3">
                <x-forms.label :for="'title'" :label="'Title'" class="text-xl text-center"/>
                <x-forms.input name="title" class="md:w-[60%] md:h-fit md:text-center mx-auto text-xl" value="{{$blog->title}}"/>
                @error('title')
                    <p class="text-red-500 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <x-forms.label :for="'content'" :label="'Content'" class="text-xl text-center"/>
                <x-forms.textArea name="content" id="content" class="md:w-[60%] mx-auto text-xl">
                {{$blog->content}}
                </x-forms.textArea>
                @error('content')
                    <p class="text-red-500 text-center">{{$message}}</p>
                @enderror
            </div>
            <x-forms.submitButton class="w-full md:w-fit mx-auto">
                Update Blog
            </x-forms.submitButton >
        </form>
    </div>
</x-app-layout>