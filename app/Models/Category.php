<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'category_slug'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function setCategorySlugAttribute($value)
    {
        return $this->attributes['category_slug'] = Str::slug($value);
    }
}
