@props(['name', 'placeholder', 'title', 'type' => 'text'])
<x-form.field>
    <x-form.label title="{{$title}}" name="{{$name}}"/>
    <input class="form-control border border-gray-400 w-full p-2"
           type="{{$type}}"
           name="{{$name}}"
           id="{{$name}}"
           placeholder="{{$placeholder}}"
           value="{{old($name)}}"
           required
    >
    <x-form.error name="{{$name}}"/>
</x-form.field>
