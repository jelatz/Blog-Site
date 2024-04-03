@props([
    'type' => 'submit'
])

<button {{$attributes->merge(['class'=>'mx-auto block bg-red-800 px-3 py-1 text-white hover:bg-red-900'])}} type="{{$type}}">
    {{$slot}}
</button>