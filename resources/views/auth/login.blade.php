<x-guest-layout>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[25rem]">
        <div class="border border-red-800 py-5 px-5 rounded-lg shadow-2xl">
            <h1 class="text-center font-semibold">Login</h1>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <x-forms.label label="Email:" class="" />
                    <x-forms.input type="text" name="email"  />
                </div>
                <div class="mb-3">
                    <x-forms.label label="Password:" class="" />
                    <x-forms.input type="password" name="password"  />
                </div>
                <div class="mb-3 flex itmes-center">
                    <x-forms.checkbox name="remember" label="Remember me" /><span class="ms-1 mt-[1px]">Remember Me</span>
                </div>
                    <x-forms.submitButton>
                        Login
                    </x-forms.submitButton>                
            </form>
        </div>
    </div>
</x-guest-layout>
