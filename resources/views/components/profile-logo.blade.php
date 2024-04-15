@props([
    'src',
    'alt',
    'id' => 'profile',
    'width' => 'w-32',
    'height' => 'h-32',
    'accept' => 'image/jpg, image/png, image/jpeg'
])
<figure class="w-fit text-center">
    <img 
    src= "{{$src}}"
    alt= "{{$alt}}"
    id ="{{$id}}"
    {{$attributes->merge(['class' => "$width $height rounded-full my-3"])}}
    >
    <label for="profile-pic" class="bg-red-800 py-2 px-3 rounded-full text-center text-white">Upload Image</label>
    <input type="file" accept="$accept" name="profile-pic" class="mt-3 hidden" id="profile-pic">
</figure>
