@extends('components.layout')

@section('content')
    <h2>{{$title}}</h2>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <p>Tempo de preparo: {{$time}} minutos.</p> <br>
                <p>Rendimento: {{$servings}} porções.</p>
            </div>
            Categoria: {{$category}}
        </div>
    </div>
    <div>
        <h3>Ingredientes</h3>
        <p>{{$ingredients}}</p>

        <h3>Instruções de preparo</h3>
        <p>{{$instructions}}</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
               <button>Editar</button>
            </div>
            <div class="col-6">
                <button>Ir para a página inicial</button>
            </div>
        </div>
    </div>
@endsection
