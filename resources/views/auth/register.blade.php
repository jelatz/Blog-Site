<x-guest-layout>
    @section('title', 'Register')
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full px-5 sm:w-[25rem]">
        <h1 class="text-center font-semibold text-2xl my-2">Register</h1>
        <div class="border border-red-800 py-5 px-5 rounded-lg shadow-2xl">
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="mb-3">
                    <x-forms.label label="Name:" class="" />
                    <x-forms.input type="text" name="name" value="{{old('name')}}" required autofocus class="w-full"/>
                    @error('name')
                        <span class="block text-sm text-red-600 mt-2">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <x-forms.label label="email" />
                    <x-forms.input type="email" name="email" value="{{old('email')}}"  class="w-full"/>
                    @error('email')
                        <span class="block text-sm text-red-600 mt-2">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <x-forms.label label="Password:" class="" />
                    <div class="relative">
                        <x-forms.input type="password" name="password" value="{{old('password')}}" id="password"  class="w-full"/>
                        <span class="absolute right-2 bottom-0" ><ion-icon name="eye" id="eye-pass"></ion-icon></span>
                    </div>
                    @error('password')
                        <span class="block text-sm text-red-600 mt-2">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <x-forms.label label="Confirm Password" />
                    <div class="relative">
                        <x-forms.input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}"  class="w-full"/>
                        <span class="absolute right-2 bottom-0" ><ion-icon name="eye" id="eye-confirm-pass"></ion-icon></span>
                    </div>
                    @error('password_confirmation')
                        <span class="block text-sm text-red-600 mt-2">{{$message}}</span>
                    @enderror
                </div>
                    <x-forms.submitButton class="w-full">
                        Register
                    </x-forms.submitButton>
            </form>
            <div class="flex mt-3 justify-center flex-col items-center">
                <p class="text-sm">Already have an account?</p>
                <a href="{{route('login')}}" class="hover:text-red-700 text-sm">Click here to Login</a>
            </div>
        </div>
    </div>
</x-guest-layout>
