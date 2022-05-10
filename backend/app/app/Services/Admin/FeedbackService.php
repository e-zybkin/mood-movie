<?php

namespace App\Services\Admin;

use App\Models\Feedback;

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
