<?php

namespace App\Services;

use App\Http\Requests\Film\UpdateFilmRequest;
use App\Models\Review;
use Illuminate\Http\UploadedFile;

class ReviewService
{
    public function index()
    {
        return Review::all();
    }

    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();
    }
}
