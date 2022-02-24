<x-layout>
    <x-slot name="content" styl>
        <div style="margin-top: 3%; margin-bottom: 3%">
            <h1 class="title text-white mt-2 text-center bg-success">Destaques da semana</h1>

            @if($recipes->count())
                <x-mainRecipeCard :recipe="$recipes[0]"/>
                @if($recipes->count() > 6)
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <x-recipeCard :recipe="$recipes[1]"/>
                            </div>
                            <div class="col">
                                <x-recipeCard :recipe="$recipes[2]"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <x-recipeCard :recipe="$recipes[3]"/>
                            </div>
                            <div class="col">
                                <x-recipeCard :recipe="$recipes[4]"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <x-recipeCard :recipe="$recipes[5]"/>
                            </div>
                            <div class="col">
                                <x-recipeCard :recipe="$recipes[6]"/>
                            </div>
                        </div>
                    </div>
                @endif
        </div>
        @else
            <p>Nenhuma receita foi encontrada</p>
            @endif
        </div>

    </x-slot>
</x-layout>

