<x-guest-layout>
    @section('title', 'Login')
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[25rem] px-14 sm:px-0">
        <h1 class="text-center font-semibold my-2 text-2xl">Login</h1>
        <x-error-message />
        <div class="border border-red-800 py-3 px-5 rounded-lg shadow-2xl">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <x-forms.label label="Email:"/>
                    <x-forms.input type="email" name="email" value="{{ old('email') }}" required autofocus/>
                    @error('email')
                    <span class="block text-sm text-red-600 mt-2">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <x-forms.label label="Password:" class="" />
                    <div class="relative">
                        <x-forms.input type="password" name="password" id="password" required autocomplete="current-password" value="{{old('password')}}" />
                        <span class="absolute right-2 bottom-0" ><ion-icon name="eye" id="eye-pass"></ion-icon></span>
                    </div>
                    @error('password')
                        <span class="block text-sm text-red-600 mt-2">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3 flex itmes-center">
                    <a href="{{route('password.request')}}" class="hover:text-red-800">Forgot Password?</a>
                </div>
                    <x-forms.submitButton class="w-full">
                        Login
                    </x-forms.submitButton>
                    <div class="mt-5">
                        <p class="text-sm">Don't have an account? <a href="{{route('register')}}" class="hover:text-red-800 block text-sm">Register Here!</a></p>                
                    </div>
            </form>
        </div>
    </div>
</x-guest-layout>
