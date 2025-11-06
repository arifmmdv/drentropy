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
            ->fit(Fit::Contain, 128, 128)
            ->nonQueued();

        $this->addMediaConversion('grid')
            ->fit(Fit::Contain, 320, 320)
            ->nonQueued();

        $this->addMediaConversion('preview')
            ->width(720)
            ->height(720)
            ->nonQueued();
    }
}
