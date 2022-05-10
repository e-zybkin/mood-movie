<?php

namespace App\Services\Admin;

use App\Models\Feedback;

class MailService
{
    public function index($id)
    {
        Feedback::where('id', $id)->update(['answered' => 1]);
    }
}
