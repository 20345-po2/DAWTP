<x-layout>
    <x-slot name="content">
        <x-recipeLayout :recipe="$recipe"/>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a class="btn btn-primary rounded" href="#">Editar Receita</a>
                </div>
                <div class="col-6">
                    <a class="btn btn-primary rounded" href="/">Ir para a página inicial</a>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>

