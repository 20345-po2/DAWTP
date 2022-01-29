@props(['heading'])
<div class="card text-dark bg-light mb-3" style=" margin-left: 13.5%; margin-right: 13.5%; max-width: 50%">
    <div class="card-body">
        <h1 class="card-title">{{$heading}}</h1>
        <div class="flex">
{{--            <x-sidebar class="w-48"/>--}}

            <div class="card-text flex-1">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
