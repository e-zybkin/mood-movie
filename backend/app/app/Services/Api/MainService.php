<?php

namespace App\Services\Api;

use App\Models\Cinema;
use App\Models\Feedback;
use App\Models\Review;

class MainService
{
    public function index()
    {
        return Cinema::all();
    }

    public function storeFeedback($feedback)
    {
        Feedback::create($feedback);
    }

    public function storeReview($review)
    {
        Review::create($review);
    }
}
