@props(['name', 'title'])
<label class="text-uppercase font-bold  text-gray-700 p-2"
       for="{{$name}}"
>
    {{ucwords($title)}}
</label>
