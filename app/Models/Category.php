<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','slug','description','is_visible','template','seo_title','seo_description'
    ];
}
