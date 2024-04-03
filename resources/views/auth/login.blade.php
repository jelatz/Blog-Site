<x-guest-layout>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[25rem]">
        <div class="bg-gray-400 py-5 px-5 rounded-lg shadow-2xl">
            <h1 class="text-center font-semibold">Login</h1>
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <x-forms.label label="Username:" class="" />
                    <x-forms.input type="text" name="username" placeholder="Enter your Username" />
                </div>
                <div class="mb-3">
                    <x-forms.label label="Password:" class="" />
                    <x-forms.input type="password" name="password" placeholder="Enter your password" />
                </div>
                    <x-forms.submitButton>
                        Login
                    </x-forms.submitButton>
            </form>
        </div>
    </div>
</x-guest-layout>
