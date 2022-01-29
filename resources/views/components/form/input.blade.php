@props(['name', 'placeholder', 'title', 'type' => 'text'])
<x-form.field>
    <x-form.label title="{{$title}}" name="{{$name}}"/>
    <input class="form-control border border-gray-400 w-full p-2"
           type="{{$type}}"
           name="{{$name}}"
           id="{{$name}}"
           placeholder="{{$placeholder}}"
        {{$attributes(['value' => old($name)])}}
    >
    <x-form.error name="{{$name}}"/>
</x-form.field>
