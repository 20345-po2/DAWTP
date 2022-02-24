<x-layout>
    <x-slot name="content">
        <!-- This example requires Tailwind CSS v2.0+ -->

        <div class="flex flex-col mt-2"  style="margin-left: 23.5%; margin-right: 13.5%; max-width: 50%;">
            <h1 class="title">Receitas enviadas</h1>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 mt-2" >
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($recipes as $recipe)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full"
                                                     src="{{asset('storage/' . str_replace("public/", "", $recipe->picture))}}"
                                                     alt="Foto da receita de {{$recipe->name}}">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a class="text-sm font-medium text-gray-900"
                                                       href="/recipes/{{$recipe->slug}}">
                                                        {{$recipe->name}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span
                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{$recipe->approval == false ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800'}}">
                  {{$recipe->approval == false ? 'Aguarda aprovação' : 'Aprovada'}}
                </span>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="/user/recipes/{{$recipe->id}}/edit"
                                           class="btn btn-outline-primary" role="button">Edit</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form method="POST" action="/user/recipes/{{$recipe->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger" onclick="return confirm('Quer mesmo apagar esta receita?')">Apagar</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
