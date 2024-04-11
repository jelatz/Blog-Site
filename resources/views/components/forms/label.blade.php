@props([
  'for' => '',
  'name' => '',
  'placeholder' => ''
])

<label {{$attributes->merge(['class' => 'text-sm font-semibold'])}} for="{{$for}}" name="{{$name}}" placeholder="{{$placeholder}}">
  {{$label}}
</label>