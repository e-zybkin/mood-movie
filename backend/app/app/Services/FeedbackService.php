<?php

namespace App\Services;

use App\Http\Requests\Film\UpdateFilmRequest;
use App\Models\Feedback;
use App\Models\Review;
use Illuminate\Http\UploadedFile;

class FeedbackService
{
    public function index()
    {
        return Feedback::all();
    }

    public function create($id)
    {
        return Feedback::find($id);
    }

    public function destroy($id)
    {
        $review = Feedback::find($id);
        $review->delete();
    }
}
