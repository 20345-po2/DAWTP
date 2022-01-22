<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Recipe;

class RecipesController extends Controller
{
    private $recipeData;

    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('addRecipe');
    }

    public function store()
    {
        /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->recipeData = $_POST;
            echo '<pre>';
            print_r($this->recipeData);
            echo '</pre>';
        }*/
        $this->recipeData = $_POST;

        return view('viewRecipe',
            ['title' => $this->recipeData['recipeName'],
                //'recipeImage' => $this->recipeData['picture'],
                'time' => $this->recipeData['time'],
                'servings' => $this->recipeData['servings'],
                'category' => $this->recipeData['category'],
                'ingredients' => $this->recipeData['ingredients'],
                'instructions' => $this->recipeData['instructions']
            ]);


    }

    public function displayRecipes()
    {
        return view('displayRecipes', [
            'recipes' => Recipe::all()
        ]);
    }

    public function viewRecipe()
    {
        return view('recipe');
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
