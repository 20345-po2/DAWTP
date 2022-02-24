<x-layout>
    <x-slot name="content">
        <div style="margin-top: 3%">
            @auth
                <x-setting :heading="'Editar receita: ' . $recipe->name ">
                    <form method="POST" action="/user/recipes/{{$recipe->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <x-form.input name="name" title="Nome da receita"
                                      placeholder="Escreva o nome da receita" :value="old('name', $recipe->name)"/>
                        <div class="row">
                            <div class="col">
                                <x-form.input name="picture" title="Foto da receita"
                                              placeholder="Escreva o nome da receita"
                                              type="file" :value="old('picture', $recipe->picture)"/>
                            </div>
                            <div class="col">
                                <x-form.field>
                                    <img src="{{asset('storage/' . str_replace("public/", "", $recipe->picture))}}"
                                         class="img-fluid rounded-start"
                                         alt="{{$recipe->name}}">
                                </x-form.field>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <x-form.input name="time" title="Tempo de preparo (minutos)"
                                              placeholder="Minutos" type="number"
                                              :value="old('time', $recipe->time)"/>
                            </div>
                            <div class="col">
                                <x-form.input name="servings" title="Números de porções"
                                              placeholder="Porções" type="number"
                                              :value="old('servings', $recipe->servings)"/>
                            </div>
                        </div>
                        <x-form.field>
                            <x-form.label title="Categoria" name="category_id"/>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="0">-- Escolha uma categoria --</option>
                                @foreach(\App\Models\Category::all()  as $category)
                                    <option
                                        value="{{ $category->id }}" {{old('$category_id', $recipe->category_id) == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-form.error name="category_id"/>
                        </x-form.field>
                        <x-form.textarea name="ingredients" title="Ingredientes"
                                         placeholder="Ex.: 3 ovos">{{old('ingredients')}}</x-form.textarea>
                        <x-form.textarea name="instructions" title="Modo de preparo"
                                         placeholder="Ex.: misture todos os ingredientes">{{old('instructions', $recipe->instructions)}}</x-form.textarea>
                        <x-form.field>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="publish" id="publish">
                                <label class="form-check-label" for="publish">
                                    Tornar a minha receita pública
                                </label>
                            </div>
                        </x-form.field>
                        <x-form.button>Enviar receita</x-form.button>
                    </form>
                </x-setting>
            @else
                <x-loginOrsignup/>
            @endauth
        </div>

    </x-slot>
</x-layout>
