@props(['for']);


<label {{$attributes->merge(['class', 'text-lg font-bold'])}} for="">
    {{$slot}}
</label>