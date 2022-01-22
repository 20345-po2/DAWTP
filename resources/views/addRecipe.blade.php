<x-layout>
    <x-slot name="content">

        <div class="card text-dark bg-light mb-3" style=" margin-left: 13.5%; margin-right: 13.5%; max-width: 50%">
            <div class="card-body">
                <h1 class="card-title">Enviar Receita</h1>
                <div class="card-text">
                    <form method="post" action="http://127.0.0.1:8000/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome da receita</label>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="Escreva o nome da receita">
                        </div>
                        <div class="form-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-camera-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path
                                    d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                            </svg>
                            <label for="picture">Foto da receita</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
                            <input type="file" name="picture" class="form-control-file" id="picture">
                        </div>
                        <div class="row">
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-alarm-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
                                </svg>
                                <label for="preparationTime">Tempo de preparo (minutos)</label>
                            </div>
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-peace-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M14 13.292A8 8 0 0 0 8.5.015v7.778l5.5 5.5zm-.708.708L8.5 9.206v6.778a7.967 7.967 0 0 0 4.792-1.986zM7.5 15.985V9.207L2.708 14A7.967 7.967 0 0 0 7.5 15.985zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5z"/>
                                </svg>
                                <label for="picture" for="servings">Números de porções</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="number" name="time" class="form-control" placeholder="Minutos" id="time">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" name="servings" placeholder="Porções"
                                       id="servings">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Categoria</label>
                            <select class="form-control" name="category" id="category">
                                <option value="0">-- Escolha uma categoria --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ingredients">Ingredientes</label>
                            <textarea class="form-control" name="ingredients" id="ingredients" rows="4"
                                      placeholder="Ex.: 3 ovos"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="instructions">Modo de preparo</label>
                            <textarea class="form-control" id="instructions" name="instructions" rows="4"
                                      placeholder="Ex.: misture todos os ingredientes"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="toPublish" id="toPublish">
                                <label class="form-check-label" for="toPublish">
                                    Tornar a minha receita pública
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Receita</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
