<?php

namespace App\Services;

use App\Http\Requests\Cinema\UpdateCinemaRequest;
use App\Models\Cinema;

class CinemaService
{
    public function index()
    {
        $cinemas = Cinema::all();
        return $cinemas;
    }

    public function store($data)
    {
        $post = Cinema::create($data);
    }

    public function update(Cinema $cinema, $data)
    {
        $cinema->update($data);
    }

    public function destroy($id)
    {
        $cinema = Cinema::find($id);
        $cinema->delete();
    }

    public function restore($id)
    {
        $cinema = Cinema::withTrashed()->find($id);
        $cinema->restore();
    }

    public function trash()
    {
        $cinemas = Cinema::onlyTrashed()->get();
        return $cinemas;
    }

}
