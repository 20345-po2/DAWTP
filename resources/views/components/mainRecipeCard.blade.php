@props(['recipe'])
<div id="mainCard" class="card mb-3 " style=";  margin-left: 13.5%; margin-right: 13.5%">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="/images/pizza.jpg" alt="{{$recipe->name}}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"> {{ $recipe->name }} </h5>
                <p class="card-text"> Categoria: {{$recipe->category->name}} </p>
                <div class="row">
                    <div class="col">
                        <p class="card-text">
                            <small class="text-muted">Criada {{$recipe->created_at->diffForHumans() }} </small>
                    </div>
                    <div class="col">
                        <p class="card-text">
                            <small class="text-muted">Rendimento: {{$recipe->servings}} porções </small>
                    </div>
                </div>
                </p>
                <p class="card-text">
                <div class="row">
                    <div class="col">
                        <p class="card-text">
                            <small class="text-muted"> por {{$recipe->user->name}} </small>
                    </div>
                    <div class="col">
                        <p class="card-text">
                            <small class="text-muted">Tempo: {{$recipe->preparationTime}} minutos </small>
                    </div>
                </div>
                </p>
                <a href="#" class="btn btn-primary">Ver Receita</a>
            </div>
        </div>
    </div>
</div>
