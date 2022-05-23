<?php

namespace App\Services\Admin;

use App\Models\Review;

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
