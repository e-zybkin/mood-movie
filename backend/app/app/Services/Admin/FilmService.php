<?php

namespace App\Services\Admin;

use App\Models\Cinema;
use App\Models\Film;
use Illuminate\Http\UploadedFile;

class FilmService
{
    public function index()
    {
        return Film::all();
    }

    public function create()
    {
        return Cinema::all();
    }

    public function store($data, UploadedFile $poster)
    {
        $film = Film::make($data);
        if (!empty($poster)) {
            $film->addMedia($poster)->toMediaCollection('poster');
        }
        $film->save();
    }

    public function edit()
    {
        return Cinema::all();
    }

    public function update(Film $film, $data, $poster)
    {
        $film->update($data);
        //$film->cinema()->sync();
        if (!empty($poster)) {
            $film->clearMediaCollection('poster');
            $film->addMedia($poster)->toMediaCollection('poster');
        }

    }

    public function destroy($id)
    {
        $film = Film::find($id);
        $film->delete();
    }

    public function restore($id)
    {
        $film = Film::withTrashed()->find($id);
        $film->restore();
    }

    public function trash()
    {
        $films = Film::onlyTrashed()->get();
        return $films;
    }

}
