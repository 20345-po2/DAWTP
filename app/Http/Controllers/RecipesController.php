<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use App\Models\Recipe;

class RecipesController extends Controller
{
    private $recipe;

    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('addRecipe', [
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->recipeData = $_POST;
            echo '<pre>';
            print_r($this->recipeData);
            echo '</pre>';
        }*/


        $this->recipe = new Recipe();
        $this->recipe->name = $_POST['name'];
        $this->recipe->slug = strtolower(str_replace(' ', '-', $_POST['name']) . '-1');
        $this->recipe->preparationTime = $_POST['time'];
        $this->recipe->servings = $_POST['servings'];
        $this->recipe->category_id = $_POST['category'];
        $this->recipe->instructions = $_POST['instructions'];
        $this->recipe->toPublish = isset($_POST['toPublish']);
        $this->recipe->user_id = 1;
        $this->recipe->save();

        return view('viewRecipe',
            [
                'recipe' => $this->recipe
            ]);


    }

    public function displayRecipes()
    {
        return view('displayRecipes', [
            'recipes' => Recipe::all()
        ]);
    }

    public function categories(Category $category)
    {
        return view('home', [
            'recipes' => $category->recipes
        ]);
    }

    public function viewRecipe(Recipe $recipe)
    {
        return view('recipe', [
            'recipe' => $recipe
        ]);
    }

    public function myAccount()
    {
        return view('myAccount');
    }

    public function about()
    {
        return view('aboutUs');
    }

}
