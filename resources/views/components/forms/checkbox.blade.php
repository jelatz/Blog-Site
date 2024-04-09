@props([
    'type' => 'checkbox',
    'name',
    'label',
    
])

<input 
    type = "{{$type}}"
    name = "{{$name}}"
    label = "{{$label}}"
    {{$attributes->merge(['class' => 'mt-1'])}}

>