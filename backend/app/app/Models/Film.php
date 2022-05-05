<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Film extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $guarded = false;
    protected $table = 'films';

    public function cinema()
    {
        return $this->belongsTo(Cinema::class,'cinema_id','id');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(200)
            ->height(200)
            ->performOnCollections('poster');
    }

    public function getShortDescription(): string
    {
        return Str::limit($this->full_desc, 90, '(...)');
    }

    public function getShortTrailer(): string
    {
        return Str::limit($this->trailer, 10, '(...)');
    }

    public function getShortKinopoisk(): string
    {
        return Str::limit($this->kinopoisk_link, 10, '(...)');
    }
}
