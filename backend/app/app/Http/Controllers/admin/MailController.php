<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MailRequest;
use App\Mail\MailClass;
use App\Services\Admin\MailService;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    private MailService $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function sendMail(MailRequest $request,$id)
    {
        $data = $request->validated();
        $this->mailService->index($id);
        Mail::to('admin@gmail.com')->send(new MailClass($data));
        return redirect()->route('feedback.index');
    }
}
