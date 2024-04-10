@props([
    'type' => 'text',
    'name',
    'value',

])

<input 
    type = "{{$type}}"
    name = "{{$name}}"
    value= "{{$value}}"
{{$attributes->merge(['class' => 'focus:border-2 rounded-lg ps-2 block h-8 my-2 w-full'])}}>
