<x-app-layout>
    <div class="min-h-screen place-items-center grid">
        <x-card class="border-0 w-98 px-3">
            <h1 class="text-3xl border-b-2 pb-2">Edit Note</h1>
            <form action="{{route('note.update',$note)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <textarea name="note" id="note" cols="30" rows="10" placeholder="Enter your note here" class="w-full mt-3 border-2 p-2">{{$note->note}}</textarea>
                </div>
                <div class="mb-3 flex justify-start gap-2 items-center">
                    <x-primary-btn class="bg-blue-600"><button class="w-full">Submit</button></x-primary-btn>
                    <x-primary-btn class="bg-red-600"><a href="{{route('note.index')}}">Cancel</a></x-primary-btn>
                </div>
            </form>
            <x-primary-btn class="bg-gray-200">
                <a href="{{route('note.index')}}" class="w-100 d-block">Back</a>
            </x-primary-btn>
        </x-card>
    </div>
</x-app-layout>
