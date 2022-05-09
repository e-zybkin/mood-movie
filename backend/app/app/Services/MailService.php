<?php

namespace App\Services;

use App\Http\Requests\Film\UpdateFilmRequest;
use App\Models\Feedback;
use App\Models\Review;
use Illuminate\Http\UploadedFile;

class MailService
{
    public function index($id)
    {
        Feedback::where('id', $id)->update(['answered' => 1]);
    }
}
