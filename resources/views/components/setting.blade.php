@props(['heading'])
<div class="card text-dark bg-light mb-3" style=" margin-left: 13.5%; margin-right: 13.5%; max-width: 50%">
    <div class="card-body">
        <h1 class="card-title">{{$heading}}</h1>
        <div class="card-text">
            {{$slot}}
        </div>
    </div>
</div>
