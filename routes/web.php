<?php

use App\Http\Controllers\RecipesController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [RecipesController::class, 'index'])->name('home');

Route::get('/recipes/{recipe:slug}', [RecipesController::class, 'viewRecipe']);

Route::get('categories/{category:slug}', [RecipesController::class, 'categories']);

Route::get('/add-recipe', [RecipesController::class, 'create']);

Route::post('/store', [RecipesController::class, 'store']);

Route::get('/my-recipes', [RecipesController::class, 'displayRecipes']);



Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

//Route::get('my-account', [RecipesController::class, 'myAccount']);
//
//Route::get('about-us', [RecipesController::class, 'about']);
