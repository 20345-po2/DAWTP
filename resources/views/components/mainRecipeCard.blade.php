@props(['recipe'])
<article>
    <img src="/images/pizza.jpg" alt="receita 1">
    {{$recipe->recipeName}}
    Categoria: <small>{{$recipe->category->categoyName}}</small>
    Enviada por <small>Celso</small>
    <button>Ver Receita</button>
</article>
