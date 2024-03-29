@props([
    'type' => 'text',
    'placeholder',
])

<input type="{{$type}}" {{$attributes->merge(['class' => 'focus:border-2 rounded-lg ps-2 block h-8'])}}>
