<x-layout>
    <div class="flex justfy-center items-center w-full">
        <x-card class="container mx-auto mt-32">
            <h1 class="mb-5">Note: {{ $note->created_at }}</h1>
            <p>{{ $note->note }}</p>
            <div class="flex justify-center my-5 gap-5">
                <a href="{{ route('note.edit', $note) }}">
                    <x-primary-btn class="bg-blue-600">
                        Edit
                    </x-primary-btn>
                </a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-primary-btn class="bg-red-600">Delete</x-primary-btn>
                </form>
                <x-primary-btn class="bg-gray-200 w-full h-fit">
                    <a href="{{ route('note.index') }}">Back</a>
                </x-primary-btn>
            </div>
        </x-card>
    </div>
</x-layout>
