<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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
Route::get('/user/recipes/create', [RecipesController::class, 'create'])->middleware('user');
Route::post('/store', [RecipesController::class, 'store'])->middleware('user');
Route::get('/user/recipes/{recipe}/edit', [RecipesController::class, 'edit'])->middleware('user');
Route::get('/my-recipes', [RecipesController::class, 'list'])->middleware('user');
Route::get('/recipes/{recipe:slug}', [RecipesController::class, 'show']);


Route::get('categories/{category:slug}', [RecipesController::class, 'categories']);





Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');


Route::get('/admin/posts', [AdminPostController::class, 'index'])->middleware('user');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

//Route::get('my-account', [RecipesController::class, 'myAccount']);
//
//Route::get('about-us', [RecipesController::class, 'about']);
