<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    public function cinema()
    {
        $this->belongsTo(Cinema::class, 'cinema_id', 'id');
    }
}
