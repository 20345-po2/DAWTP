<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use App\Models\Ingredients;
use App\Models\Recipe;
use App\Models\RecipeIngredient;
use App\Models\User;
use Illuminate\Validation\Rule;

class RecipesController extends Controller
{

    public function index()
    {
        return view('home', [
            'recipes' => Recipe::latest()->filter(request(['search']))->get()
        ]);
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store()
    {


        $attributes = $this->validateRecipe();

        $attributes['name'] = request()->get('name');
        $attributes['user_id'] = auth()->id();
        $attributes['publish'] = isset($_POST['publish']);
        $attributes['picture'] = request()->file('picture')->store('public/thumbnails');

        $ingredients = explode("\n", $_POST['ingredients']);

        $recipe = Recipe::create($attributes);

        $ingredientList =$this->storeIngredients($ingredients);

        $recipe->ingredients()->attach($ingredientList);

        return view('recipes.edit',
            [
                'recipe' => $recipe
            ]);

    }

    public function list()
    {
        $user = User::find(auth()->user()->id);
        $recipes = $user->recipes;
        //$recipes = $user->recipes->where('approval', false);


        return view('recipes.list', [
            'recipes' => $recipes->all()
        ]);
    }

    public function categories(Category $category)
    {
        return view('home', [
            'recipes' => $category->recipes
        ]);
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', [
            'recipe' => $recipe
        ]);
    }

    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', [
            'recipe' => $recipe]);
    }

    public function update(Recipe $recipe)
    {

        $attributes = $this->validateRecipe($recipe);

        $attributes['publish'] = isset($_POST['publish']);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['picture'] = request()->file('picture')->store('public/thumbnails');
        }


        $recipe->update($attributes);

        return back()->with('success', "Receita atualizada!");
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return back()->with('success', 'Receita apagada!');
    }

    protected function validateRecipe(?Recipe $recipe = null): array
    {
        $recipe ??= new Recipe();

        return request()->validate([
            'name' => 'required',
            'time' => 'required',
            'picture' => $recipe->exists ? ['image'] : ['required', 'image'],
            'servings' => 'required',
            'instructions' => 'required',
            'ingredients' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }


    public function about()
    {
        return view('aboutUs');
    }

    private function storeIngredients(array $ingredients)
    {
        $ingredientList = array();
        foreach ($ingredients as $ingredient) {
            $ing = explode(" ", $ingredient);
            if (sizeof($ing) > 2) {
                $unit = $ing[1];
                $name = $this->getIngredientName($ing);
                $amount = $ing[0];
                $newIngredient = array('name' => $name, 'unit' => $unit, 'amount' => $amount);
                $id = Ingredients::create($newIngredient)->id;
                array_push($ingredientList, $id);
            }
        }
        return $ingredientList;
    }

    private function getIngredientName(array $ing)
    {
        $name = "";
        for ($i = 2; $i < sizeof($ing); $i++) {
            $name = $name . " " . $ing[$i];
        }
        return $name;
    }


}
