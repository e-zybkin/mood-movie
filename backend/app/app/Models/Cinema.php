<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cinema extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'cinemas';
    protected $guarded = false;

    public function films()
    {
        $this->hasMany(Film::class,'cinema_id','id');
    }

    public function reviews()
    {
        $this->hasMany(Review::class,'cinema_id','id');
    }
    public function sliders()
    {
        $this->hasMany(Slider::class,'cinema_id','id');
    }


}
