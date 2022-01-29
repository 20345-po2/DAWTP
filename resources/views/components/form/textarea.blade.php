@props(['name', 'placeholder', 'title'])
<x-form.field>
    <x-form.label title="{{$title}}" name="{{$name}}"/>

    <textarea class="form-control border border-gray-400 w-full p-2"
              name="{{$name}}"
              id="{{$name}}"
              rows="5"
              placeholder="{{$placeholder}}"
              required
    >{{$slot ?? old($name)}}</textarea>

    <x-form.error name="{{$name}}"/>
</x-form.field>
