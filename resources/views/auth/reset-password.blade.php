<x-guest-layout>
    @section('title', 'Reset Password')
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[25rem]">
        <h1 class="text-center font-semibold my-2 text-2xl">Password Reset</h1>
        <div class="border border-red-800 py-5 px-5 rounded-lg shadow-2xl">
            <form action="{{route('password.update')}}" method="POST">
                @csrf
                <input type="text" value="{{$token}}" hidden name="token">
                <div class="mb-3">
                    <x-forms.label label="Email:" class="font-semibold" />
                    <x-forms.input type="email" name="email"  value="{{old('email')}}" />
                    @error('email')
                    <span class="block text-sm text-red-600 mt-2">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <x-forms.label label="Password:" class="font-semibold" autofocus/>
                    <x-forms.input type="password" name="password" required />
                </div>
                <div class="mb-3">
                    <x-forms.label label="Confirm Password:"/>
                    <x-forms.input type="password" name="password_confirmation"/>
                </div>
                    <x-forms.submitButton>
                        Submit
                    </x-forms.submitButton>                
            </form>
        </div>
    </div>
</x-guest-layout>
