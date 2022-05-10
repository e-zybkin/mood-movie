<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\StoreFeedbackRequest;
use App\Http\Requests\Review\StoreReviewRequest;
use App\Http\Resources\Api\CinemaResource;
use App\Http\Resources\Api\FilmResource;
use App\Http\Resources\Api\ReviewResource;
use App\Services\Api\CinemaService;
use Illuminate\Http\Request;

class IndexCinemaController extends Controller
{
    private CinemaService $cinemaService;

    public function __construct(CinemaService $cinemaService)
    {
        $this->cinemaService = $cinemaService;
    }

    public function index()
    {
        $cinemas = $this->cinemaService->index();
        return response()->json([
            CinemaResource::collection($cinemas),
            'success' => true,
            'message' => 'all cinema',
        ], 200);
    }

    public function show($id)
    {
        $cinema = $this->cinemaService->show($id);
        return response()->json([
            new CinemaResource($cinema),
            'success' => true,
            'message' => 'show cinema',
        ], 200);
    }


    public function storeFeedback(StoreFeedbackRequest $request)
    {
        $feedback = $request->all();
        $this->cinemaService->storeFeedback($feedback);
        return response()->json([
            'success' => true,
            'message' => 'feedback success send',
        ], 200);
    }

    public function storeReview(StoreReviewRequest $request)
    {
        $review = $request->all();
        $this->cinemaService->storeReview($review);
        return response()->json([
            'success' => true,
            'message' => 'review created',
        ], 200);
    }

    public function getSliders($id)
    {
        $sliders = $this->cinemaService->getSliders($id);
        return response()->json([
            'sliders' => $sliders,
            'success' => true,
            'message' => 'Successfully get sliders.',
        ], 200);
    }

    public function getAbout($id)
    {
        $about = $this->cinemaService->getAbout($id);
        return response()->json([
            'about' => $about,
            'success' => true,
            'message' => "Successfully get about's image.",
        ], 200);
    }

    public function getFilms($id)
    {
        $films = $this->cinemaService->getFilms($id);
        return response()->json([
            'reviews' => FilmResource::collection($films),
            'success' => true,
            'message' => 'Successfully get reviews.',
        ], 200);
    }

    public function getReviews($id)
    {
        $reviews = $this->cinemaService->getReviews($id);
        return response()->json([
            'reviews' => ReviewResource::collection($reviews),
            'success' => true,
            'message' => 'Successfully get reviews.',
        ], 200);
    }
}
