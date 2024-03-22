<div {{$attributes->merge(['class'=>'min-h-96 relative'])}}>
   <div class="absolute top-0 left-0 w-full h-full bg-black opacity-40"></div>
   {{$slot}}
</div>