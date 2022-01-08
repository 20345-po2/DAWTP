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

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            echo '<pre>';
            print_r($_FILES['picture']['type']);
            echo '</pre>';
        }
    }

}
