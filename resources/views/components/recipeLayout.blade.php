@props(['recipe'])
<div class="card mb-3" style=";  margin-left: 13.5%; margin-right: 13.5%; max-width: 50%">
    <h1 class="card-title">{{ $recipe->name }}</h1>
    <img src="/images/pizza.jpg" alt="..." class="img-fluid rounded-start" alt="{{$recipe->name}}">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="card-text">Categoria:<br>{{$recipe->category->name}}</p>
                </div>
                <div class="col">
                    <p class="card-text">Preparo<br>{{$recipe->preparationTime}} Minutos</p>
                </div>
                <div class="col">
                    <p class="card-text">Rendimento<br>{{$recipe->servings}} Porções</p>
                </div>
                <div class="col">
                    <p class="card-text">
                        Enviada por {{$recipe->user->name}}<br>
                        <small class="text-muted">Membro desde {{$recipe->user->created_at->diffForHumans() }}</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header text-center">Ingredientes</div>
    <div class="card-body">
        {{--        <h5 class="card-title">Light card title</h5>--}}
        <p class="card-text">Ovos<br>2 colheres de açúcar<br>1 colher de canela</p>
    </div>
</div>

<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header text-center">Modo de preparo</div>
    <div class="card-body">
        {{--        <h5 class="card-title">Light card title</h5>--}}
        <p class="card-text">{{$recipe->instructions}}</p>
    </div>
</div>

