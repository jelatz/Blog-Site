<x-app-layout>
    <div class="container-sm md:container px-5 py-24">
        <x-header-title title="Profile Information" />
        <x-success-message class="mb-5" />
        <div class="bg-slate-200 my-2 p-10">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-5">
                    {{-- <x-sub-title title="Edit Profile"/> --}}
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
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <x-forms.label label="Password:" for="password" />
                    <x-forms.input type="password" name="password" class="w-96" />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <x-forms.submitButton class="w-fit mt-4">
                    Update Profile
                </x-forms.submitButton>
            </form>
        </div>
</x-app-layout>
