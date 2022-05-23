<?php

namespace App\Services\Api;

use App\Models\Cinema;
use App\Models\Feedback;
use App\Models\Review;

class CinemaService
{
    public function index()
    {
        return Cinema::all();
    }

    public function show($id)
    {
        return Cinema::find($id);
    }

    public function storeFeedback($feedback)
    {
        Feedback::create($feedback);
    }

    public function getSliders($id)
    {
        $data = [];
        $cinema = Cinema::find($id);
        foreach ($cinema->getMedia('sliders') as $key => $image) {
            $data['thumb'][]= $cinema->getMedia('sliders')->all()[$key]->getFullUrl('thumb');
            $data['original'][] = $cinema->getMedia('sliders')->all()[$key]->getFullUrl();
        }
        return $data;
    }

    public function getAbout($id)
    {
        $cinema = Cinema::find($id);
        $about['thumb'] = $cinema->getMedia('about')->first()->getFullUrl('thumb');
        $about['original'] = $cinema->getMedia('about')->first()->getFullUrl();
        return $about;
    }

    public function getFilms($id)
    {
        $cinema = Cinema::find($id);
        return $cinema->films;
    }

    public function getReviews($id)
    {
        $cinema = Cinema::find($id);
        return $cinema->reviews;
    }
}
