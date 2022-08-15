<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'tag_slug'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function setTagSlugAttribute($value)
    {
        return $this->attributes['tag_slug'] = Str::slug($value);
    }
}
