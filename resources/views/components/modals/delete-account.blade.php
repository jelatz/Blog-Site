<div x-data="{ isOpen: {{ session('modal') == 'account-deletion' ? 'true' : 'false' }} }">

    <!-- Trigger Button -->
    <a href="#" @click="isOpen = true"
        class="block w-fit bg-red-800 px-3 py-1 text-white hover:bg-red-900 rounded-md text-center">Delete Account</a>

    <!-- Modal -->
    <div x-show="isOpen" class="fixed inset-0 overflow-y-auto flex items-center justify-center z-50 w-full px-3">
        <div class="absolute w-full h-full bg-black opacity-60"></div>
        <div class="relative mx-auto w-full md:w-96 bg-white border border-red-800 rounded-lg shadow-lg"
            @click.away="isOpen = false">
            <!-- Modal Header -->
            <div class="flex justify-between items-center px-6 py-4 rounded-lg border-b-2">
                <h2 class="text-lg font-semibold text-black">Account Deletion</h2>
                <button @click="isOpen = false" class="text-black text-xl">&times;</button>
            </div>
            <!-- Modal Body -->
            <form action="{{ route('profile.destroy') }}" method="post">
                @csrf
                <div class="px-6 py-3">
                    <div class="mb-3">
                        <label for="password" class="text-lg text-black">Enter your password:</label>
                        <input type="password" name="password" id="password"
                            class="block w-full rounded-lg ps-2 bg-gray-50 h-10 mt-3">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        @if (session('error'))
                            <p class="text-red-500 text-xs mt-1">{{ session('error') }}</p>
                        @endif
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="px-6 py-3 bg-primary text-center rounded-lg">
                    <button class="px-5 py-2 bg-btn text-white bg-red-800 rounded-lg">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
