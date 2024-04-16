@props([
    'type' => 'submit'
])

<button {{$attributes->merge(['class'=>'block bg-red-800 px-3 py-1 text-white hover:bg-red-900 rounded-md'])}} type="{{$type}}">
    {{$slot}}
</button>