<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'unit', 'amount'];


    public function recipe()
    {
        return $this->belongsToMany(Recipe::class);
    }
}
