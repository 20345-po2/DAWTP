<?php

namespace App\Http\Controllers;

class RecipesController extends Controller
{

    public function index() {
        return view('home');
    }

    public function create() {
        return view('addRecipe');
    }

}
