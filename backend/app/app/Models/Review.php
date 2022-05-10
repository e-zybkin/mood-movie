<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = ['cinema_id','nickname','message'];

    public function cinema()
    {
        $this->belongsTo(Cinema::class,'cinema_id','id');
    }
}
