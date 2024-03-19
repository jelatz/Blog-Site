<x-app-layout>
    <div class="flex justfy-center items-center w-full">
        <x-card class="container mx-auto mt-32">
            <h1 class="mb-5 text-black text-2xl">Note: {{ $note->created_at }}</h1>
            <p class="text-black">{{ $note->note }}</p>
            <div class="flex justify-center my-5 gap-5">
                <x-primary-btn class="bg-blue-600">
                    <a href="{{ route('note.edit', $note) }}">
                        Edit
                    </a>
                </x-primary-btn>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-primary-btn class="bg-red-600">Delete</x-primary-btn>
                </form>
                <x-primary-btn class="bg-gray-200">
                    <a href="{{ route('note.index') }}">Back</a>
                </x-primary-btn>
            </div>
        </x-card>
    </div>
</x-app-layout>
