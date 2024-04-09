@props([
    'href' => '#',
])

<a {{$attributes->merge(['class' => 'text-white px-5 py-1 rounded-lg hover:cursor-pointer uppercase'])}} href={{$href}}>Blog Site Logo</a>