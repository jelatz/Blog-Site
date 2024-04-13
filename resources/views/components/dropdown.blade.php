@props([
    'type' => 'button',
    'name' => 'dropdown',
    'id' => 'dropdown',
])
<button
    type = "{{$type}}"
    name="{{$name}}"
    id="{{$id}}"
{{$attributes->merge(['class'=>'text-white relative leading-8'])}}>
    <img src="{{asset('images/home-hero.jpg')}}" alt="" class="h-8 w-8 rounded-3xl inline-block float-right ml-1">
    {{$slot}}
</button>


<script>
    $('#dropdown').on('click',function(){
        $('#dropdown-menu').toggleClass('hidden');
    })
</script>