<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Recipe as RecipeResources;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RecipesController extends BaseController
{
    public function index()
    {
        $recipes = Recipe::all();
        return $this->sendResponse(RecipeResources::collection($recipes), 'Recipe fetched.');
    }


    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'time' => 'required',
            'servings' => 'required',
            'instructions' => 'required',
            'ingredients' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);


        $recipe = Recipe::create($attributes);
        return $this->sendResponse(new RecipeResources($recipe), 'Recipe created.');
    }


    public function show($id)
    {
        $recipe = Recipe::find($id);
        if (is_null($recipe)) {
            return $this->sendError('Recipe does not exist.');
        }
        return $this->sendResponse(new RecipeResources($recipe), 'Recipe fetched.');
    }


    public function update(Request $request, Recipe $recipe)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $recipe->name = $input['name'];
        $recipe->instructions = $input['instruction'];
        $recipe->save();

        return $this->sendResponse(new RecipeResources($recipe), 'Recipe updated.');
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return $this->sendResponse([], 'Recipe deleted.');
    }
}
