<x-app-layout>
    <div class="container-sm md:container px-5 py-24">
        <x-header-title title="Profile Information" />
        <x-success-message class="mb-5" />
        <div class="bg-slate-200 my-2 md:p-10 p-4">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-5">
                    <x-profile-logo :src="$user->getImageURL()" />
                </div>
                <div class="mb-3">
                    <x-forms.label label="Name:" for="name" />
                    <x-forms.input name="name" class="w-96" value="{{ Auth::user()->name }}" />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <x-forms.label label="Email:" for="email" />
                    <x-forms.input name="email" class="w-96" value="{{ Auth::user()->email }}" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <x-forms.label label="Password:" for="password" />
                    <x-forms.input type="password" name="password" class="w-96" />
                    @error('')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col md:flex-row space-y-3 md:space-x-3 md:space-y-0 mt-5">
                    <x-forms.submitButton class="w-full md:w-fit h-fit">
                        Update Profile
                    </x-forms.submitButton>
                </div>
            </form>
        </div>
        <div class="bg-slate-200 my-5 md:p-10 p-4">
            <x-modals.delete-account />
        </div>
</x-app-layout>
