<x-layout>
    <div class="min-h-screen place-items-center grid">
        <x-card class="border-0 w-98 px-3">
            <h1 class="text-3xl border-b-2 pb-2">Create new Note</h1>
            <form action="{{route('note.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea name="note" id="note" cols="30" rows="10" placeholder="Enter your note here" class="w-full mt-3 border-2 p-2"></textarea>
                </div>
                <div class="mb-3 flex justify-start gap-2 items-center">
                    <x-primary-btn class="bg-blue-600"><button>Submit</button></x-primary-btn>
                    <x-primary-btn class="bg-red-600"><a href="{{route('note.index')}}">Cancel</a></x-primary-btn>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>
