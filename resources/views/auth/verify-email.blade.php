<x-guest-layout>
    @section('title', 'Email Verification')
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[25rem]">
        <div class="border border-red-800 py-5 px-5 rounded-lg shadow-2xl">
            <h1 class="text-center font-semibold my-2 text-2xl">Email Verification</h1>
            <p class="my-5 text-center">Please check your email to verify.</p>
            <div class="flex items-center justify-evenly">
                <form action="{{route('verification.send')}}" method="post" class="text-center">
                    @csrf
                    <button type="submit" class="px-5 py-1 border-red-800 border rounded-md">Resend Verification</button>
                </form>
                <form action="{{route('logout')}}" method="post">
                @csrf
                    <button type="submit" class="text-black">Logout</button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>