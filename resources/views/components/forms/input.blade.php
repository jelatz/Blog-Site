@props([
    'type' => 'text',
    'name',
    'placeholder',
])

<input 
    type = "{{$type}}"
    name = "{{$name}}"
    placeholder = "{{$placeholder}}"
{{$attributes->merge(['class' => 'focus:border-2 rounded-lg ps-2 block h-8 my-2 w-full'])}}>
