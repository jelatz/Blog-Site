@props([
  'for' => '',
  'name' => '',
  'placeholder' => ''
])

<label {{$attributes->merge(['class' => 'text-sm'])}} for="{{$for}}" name="{{$name}}" placeholder="{{$placeholder}}">
  {{$label}}
</label>