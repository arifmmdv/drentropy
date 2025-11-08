<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name','slug','description','is_visible','template','seo_title','seo_description'
    ];

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }
}
