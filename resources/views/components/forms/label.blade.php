@props([
  'for' => '',
  'label' => '',
])

<label {{$attributes->merge(['class' => 'font-semibold block'])}} :for="$for">
  {{$label}}
</label>