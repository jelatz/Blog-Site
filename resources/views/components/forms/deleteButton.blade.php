@props([
    'type' => 'submit',
    'data-open-modal',
    'data-clsoe-modal'
])

<button {{$attributes->merge(['class'=>'block bg-red-800 px-3 py-1 text-white hover:bg-red-900 rounded-md'])}} type="{{$type}}" $data-open-modal>
    {{$slot}}
</button>