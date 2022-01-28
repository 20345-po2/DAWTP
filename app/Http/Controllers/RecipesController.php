<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use App\Models\Recipe;
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
        return view('recipes.create', [
            'categories' => Category::all()
        ]);
    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'time' => 'required',
            'picture' => 'required|image',
            'servings' => 'required',
            'instructions' => 'required',
            'ingredients' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['name'] = request()->get('name');
        $attributes['user_id'] = auth()->id();
        $attributes['publish'] = isset($_POST['publish']);
        $attributes['picture'] = request()->file('picture')->store('public/thumbnails');


        $recipe = Recipe::create($attributes);

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
        return view('recipes.edit', ['recipe' => $recipe]);
    }


    public function about()
    {
        return view('aboutUs');
    }


}
