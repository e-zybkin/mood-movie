<?php

namespace App\Http\Controllers\admin\cinema;

use App\Http\Controllers\Controller;
use App\Services\FeedbackService;

class FeedbackController extends Controller
{
    private FeedbackService $fbService;

    public function __construct(FeedbackService $fbService)
    {
        $this->fbService = $fbService;
    }

    public function index()
    {
        $feedbacks = $this->fbService->index();
        return view('admin.feedbacks.feedbacks', ['feedbacks' => $feedbacks]);
    }

    public function create($id)
    {
        $feedback = $this->fbService->create($id);
        return view('admin.feedbacks.create',['feedback'=>$feedback]);
    }

    public function destroy($id)
    {
        $this->fbService->destroy($id);
        return redirect()->route('feedback.index');
    }
}
