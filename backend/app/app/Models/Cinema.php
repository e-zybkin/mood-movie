<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Cinema extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    public $registerMediaConversionsUsingModelInstance = true;

    protected $table = 'cinemas';
    protected $guarded = false;

    public function films()
    {
        return $this->hasMany(Film::class, 'cinema_id', 'id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'cinema_id', 'id');
    }

    public function sliders()
    {
        return $this->hasMany(Slider::class, 'cinema_id', 'id');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(200)
            ->height(200)
            ->performOnCollections('main','about','sliders');
    }

    public function getShortDescription(): string
    {
        return Str::limit($this->full_desc, 200, '(...)');
    }
}
