@props([
    'name' =>'',
    'id' => '',
    'rows' => 10,
    'cols' => 5,
])

<textarea 
    id = "{{$id}}"
    name = "{{$name}}"
    rows = "{{$rows}}"
    cols = "{{$cols}}"
  
{{$attributes->merge(['class' => 'focus:border-2 rounded-lg ps-2 block my-2 w-full'])}}>
{{$slot}}
</textarea>