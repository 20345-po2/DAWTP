<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientRecipe extends Model
{

    use HasFactory;
    //public $incrementing = true;

    protected $table = 'ingredient_table';
    protected $fillable = ['ingredient_id', 'recipe_id', 'amount'];
}
