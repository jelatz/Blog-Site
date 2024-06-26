<x-guest-layout>
    @section('title', 'Forgot Password')
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[25rem]">
        <h1 class="text-center font-semibold my-2 text-2xl">Reset Password</h1>
        @if(session()->has('success'))
            <p class="border px-5 py-2 text-center my-3 bg-red-800 text-white">Password reset link sent!</p>
        @endif
        <div class="border border-red-800 py-5 px-5 rounded-lg shadow-2xl">
            <p class="my-2">We will send you a link to your email, use that link to reset your password</p>
            <form action="{{route('password.email')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <x-forms.label label="Email:" class="font-semibold" />
                    <x-forms.input type="email" name="email"  value="{{old('email')}}" />
                    @error('email')
                    <span class="block text-sm text-red-600 mt-2">{{$message}}</span>
                    @enderror
                </div>
                    <x-forms.submitButton>
                        Submit
                    </x-forms.submitButton>                
            </form>
        </div>
    </div>
</x-guest-layout>
