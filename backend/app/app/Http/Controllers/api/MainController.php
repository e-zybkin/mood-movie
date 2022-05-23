<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\StoreFeedbackRequest;
use App\Http\Requests\Review\StoreReviewRequest;
use App\Http\Resources\Api\CinemaResource;
use App\Services\Api\MainService;

class MainController extends Controller
{
    private MainService $mainService;

    public function __construct(MainService $mainService)
    {
        $this->mainService = $mainService;
    }

    public function index()
    {
        $cinemas = $this->mainService->index();
        return response()->json([
            'cinemas' => CinemaResource::collection($cinemas),
            'success' => true,
            'message' => 'all cinema',
        ], 200);
    }


    public function storeFeedback(StoreFeedbackRequest $request)
    {
        $feedback = $request->all();
        $this->mainService->storeFeedback($feedback);
        return response()->json([
            'success' => true,
            'message' => 'feedback success send',
        ], 200);
    }

    public function storeReview(StoreReviewRequest $request)
    {
        $review = $request->all();
        $this->mainService->storeReview($review);
        return response()->json([
            'success' => true,
            'message' => 'review created',
        ], 200);
    }

}
