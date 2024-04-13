@props([
    'src',
    'alt',
    'width' => 'w-32',
    'height' => 'h-32'
])
<figure>
    <input type="file" onchange="preview()" accept="image/*" name="upload">
    <img 
    src= "{{$src}}"
    alt= "{{$alt}}"
    {{$attributes->merge(['class' => "$width $height rounded-full"])}}
    >
</figure>