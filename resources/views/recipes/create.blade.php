<x-layout>
    <x-slot name="content">
        @auth
            <x-setting heading="Enviar Nova Receita">
                <form method="post" action="http://127.0.0.1:8000/store" enctype="multipart/form-data">
                    @csrf
                    <x-form.input name="name" title="Nome da receita"
                                  placeholder="Escreva o nome da receita"/>
                    <x-form.input name="picture" title="Foto da receita"
                                  placeholder="Escreva o nome da receita" type="file"/>
                    <div class="row">
                        <div class="col">
                            <x-form.input name="time" title="Tempo de preparo (minutos)"
                                          placeholder="Minutos" type="number"/>
                        </div>
                        <div class="col">
                            <x-form.input name="servings" title="Números de porções"
                                          placeholder="Porções" type="number"/>
                        </div>
                    </div>
                    <x-form.field>
                        <x-form.label title="Categoria" name="category_id"/>
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="0">-- Escolha uma categoria --</option>
                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <x-form.error name="category_id"/>
                    </x-form.field>
                    <x-form.textarea name="ingredients" title="Ingredientes"
                                     placeholder="Ex.: 3 ovos"/>
                    <x-form.textarea name="instructions" title="Modo de preparo"
                                     placeholder="Ex.: misture todos os ingredientes"/>
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
            <x-loginOrsignup />
        @endauth
    </x-slot>
</x-layout>
