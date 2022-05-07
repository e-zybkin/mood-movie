<?php

namespace App\Services;

use App\Http\Requests\Cinema\UpdateCinemaRequest;
use App\Models\Cinema;
use Illuminate\Http\UploadedFile;

class CinemaService
{
    public function index()
    {
        $cinemas = Cinema::all();
        return $cinemas;
    }

    public function store($data, UploadedFile $poster)
    {
        $cinema = Cinema::make($data);
        if (!empty($poster)) {
            $cinema->addMedia($poster)->toMediaCollection('main');
        }
        $cinema->save();
    }

    public function upload($slider, $id)
    {
        $cinema = Cinema::find($id);
        if (!empty($slider)) {
            $cinema->addMedia($slider)->toMediaCollection('sliders');
        }
    }

    public function update(Cinema $cinema, $data, $images)
    {
        $cinema->update($data);
        if (!empty($images['poster'])) {
            $cinema->clearMediaCollection('main');
            $cinema->addMedia($images['poster'])->toMediaCollection('main');
        }
        if (!empty($images['about'])) {
            $cinema->clearMediaCollection('about');
            $cinema->addMedia($images['about'])->toMediaCollection('about');
        }
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
