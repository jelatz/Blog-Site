@props([
    'type' => 'button',
    'name' => 'dropdown',
    'id' => 'dropdown',
])
<button
    type = "{{$type}}"
    name="{{$name}}"
    id="{{$id}}"
{{$attributes->merge(['class'=>'text-white relative'])}}>
    <ion-icon name="caret-down-outline" class="absolute left-7 top-1"></ion-icon>
    {{$slot}}
</button>


<script>
    $('#dropdown').on('click',function(){
        $('#dropdown-menu').toggleClass('hidden');
    })
</script>