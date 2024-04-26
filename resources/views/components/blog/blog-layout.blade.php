@props(['blog'])

<a 
href="/blog/{{$blog->id}}"
{{$attributes->merge(['class'=>'flex flex-col justify-between gap-x-10 items-center gap-y-5 border-b-2 py-2 w-full md:w-80'])}}>
    {{$slot}}
</a>
