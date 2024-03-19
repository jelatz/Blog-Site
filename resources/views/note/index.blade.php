<x-layout>
        <div class="container mx-auto px-3 my-32 bg-slate-100 py-3">
                <div class="flex justify-between items-center">
                        <h1 class="text-3xl">Notes</h1>
                        <a href="#" class="px-2 py-1 bg-gray-500 hover:bg-gray-300">New Note</a>
                </div>
                <div class="flex justify-center md:justify-evenly md:gap-y-10 items-center flex-wrap mt-5">
                        @foreach ($notes as $note)
                        <x-card>
                                <h2>Title</h2>
                                {{-- Str::words('data', how many words you want to exist) --}}
                                <p>{{Str::words($note->note, 50)}}</p>
                                <div class="flex justify-between mt-5 gap-5 items-center">
                                        <a href="#" class="p-2 bg-blue-200 w-full text-center">View</a>
                                        <a href="#" class="p-2 bg-blue-700 w-full text-center">Edit</a>
                                        <button class="p-2 bg-red-600 w-full text-center">Delete</button>
                                </div>
                        </x-card>
                        @endforeach
                        </div>
        </div>
</x-layout>
