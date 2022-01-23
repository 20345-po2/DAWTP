<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Recipe extends Model
{
    use HasFactory;


    protected $fillable = ['slug', 'picture', "name", "servings", "time", "instructions", "publish", "approval", "category_id", 'user_id'];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query
                ->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('instructions', 'like', '%' . request('search') . '%');
        }

    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name . '-' . auth()->id());
    }


}
