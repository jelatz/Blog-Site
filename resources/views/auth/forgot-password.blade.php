<x-guest-layout>
    @section('title', 'Forgot Password')
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[25rem]">
        <h1 class="text-center font-semibold my-2 text-2xl">Reset Password</h1>
        <div class="border border-red-800 py-5 px-5 rounded-lg shadow-2xl">
            <form action="{{route('forgot-password')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <x-forms.label label="Email:" class="" />
                    <x-forms.input type="text" name="email"  value="{{old('email')}}" />
                    @error('email')
                    <span class="block text-sm text-red-600 mt-2">{{$message}}</span>
                    @enderror
                </div>
                    <x-forms.submitButton>
                        Reset
                    </x-forms.submitButton>                
            </form>
        </div>
    </div>
</x-guest-layout>
