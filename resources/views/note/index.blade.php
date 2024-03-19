<x-app-layout>
    @section('title', 'Notes - Dashboard')
    <div class="container mx-auto px-3 my-5 bg-slate-100 py-3">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl text-black">Notes</h1>
            <a href="{{ route('note.create') }}" class="px-2 py-1 bg-gray-500 hover:bg-gray-300 text-black">New Note</a>
        </div>
        <div class="flex justify-center md:justify-center gap-5 md:gap-y-10 items-center flex-wrap mt-5 py-10">
            @foreach ($notes as $note)
                <x-card class="w-80 flex flex-col justify-between">
                    <h2>Title</h2>
                    {{-- Str::words('data', how many words you want to exist) --}}
                    <p class="line-clamp-5">{{ $note->note }}</p>
                    <div class="flex justify-between mt-5 gap-5 items-center">
                        <x-primary-btn class="bg-blue-300">
                            <a href="{{ route('note.show', $note) }}">
                                View</a>
                        </x-primary-btn>
                        <x-primary-btn class="bg-blue-600"><a
                                href="{{ route('note.show', $note) }}">Edit</a></x-primary-btn>
                                <form action="{{ route('note.destroy', $note) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-primary-btn class="bg-red-600">Delete</x-primary-btn>
                                </form>
                    </div>
                </x-card>
            @endforeach
        </div>

        {{$notes->links()}}
    </div>
</x-app-layout>
