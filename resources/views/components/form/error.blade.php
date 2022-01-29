@props(['name'])
@error($name)
    <p class="warning text-xs mt-2">{{$message}}</p>
@enderror
