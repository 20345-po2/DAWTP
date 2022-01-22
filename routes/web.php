<?php

use App\Http\Controllers\RecipesController;
use App\Http\Controllers\UploadFileController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'recipes' => Recipe::all()
    ]);

});


Route::get('/recipes/recipe', [RecipesController::class, 'viewRecipe']);
Route::get('/recipes/add-recipe', [RecipesController::class, 'create']);
Route::post('/recipes/store', [RecipesController::class, 'store']);
Route::get('/recipes/my-recipes', [RecipesController::class, 'displayRecipes']);
Route::get('my-account', [RecipesController::class, 'myAccount']);
Route::get('about-us', [RecipesController::class, 'about']);
