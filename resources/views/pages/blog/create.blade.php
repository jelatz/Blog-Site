<x-app-layout>
    <div class="container py-10">
        <x-header-title title="Create Blog" class="mb-5"/>
        <form action="#" method="post">
            @csrf
            <div class="mb-3">
                <x-forms.label :for="'title'" :label="'Title'" class="text-xl text-center"/>
                <x-forms.input name="title" class="md:w-[60%] md:h-fit md:text-center mx-auto text-xl"/>
            </div>
            <div class="mb-3">
                <x-forms.label :for="'content'" :label="'Content'" class="text-xl text-center"/>
                <x-forms.textArea name="content" id="content" class="md:w-[60%] mx-auto text-2xl" />
            </div>
            <x-forms.submitButton class="w-full md:w-fit mx-auto">
                Create Blog
            </x-forms.submitButton >
        </form>
    </div>
</x-app-layout>