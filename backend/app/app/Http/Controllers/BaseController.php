<?php

namespace App\Http\Controllers;

use App\Services\CinemaService;

class BaseController extends Controller
{
    public $service;

    public function __construct(CinemaService $service)
    {
        $this->service = $service;
    }
}
