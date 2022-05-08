<?php

namespace App\Http\Controllers\admin\cinema;

use App\Http\Controllers\Controller;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    private ReviewService $revService;

    public function __construct(ReviewService $revService)
    {
        $this->revService = $revService;
    }

    public function index()
    {
        $reviews = $this->revService->index();
        return view('admin.reviews.reviews', ['reviews' => $reviews]);
    }

    public function destroy($id)
    {
        $this->revService->destroy($id);
        return redirect()->route('review.index');
    }
}
