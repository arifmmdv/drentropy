<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Enums\Fit;

class Blog extends Model implements HasMedia
{
    use InteractsWithMedia;
    use SoftDeletes;

    protected $fillable = [
        'title','slug','content','category_id','more_content','is_visible','template','seo_title','seo_description','published_at'
    ];

    protected $casts = [
        'more_content' => 'array'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(Fit::Contain, 320, 213)
            ->nonQueued();

        $this->addMediaConversion('grid')
            ->fit(Fit::Contain, 575, 383)
            ->nonQueued();

        $this->addMediaConversion('preview')
            ->width(900)
            ->height(600)
            ->nonQueued();

        $this->addMediaConversion('full')
            ->width(1200)
            ->height(800)
            ->nonQueued();
    }
}
