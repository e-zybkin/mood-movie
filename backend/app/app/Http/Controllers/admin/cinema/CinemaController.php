<?php

namespace App\Http\Controllers\admin\cinema;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cinema\StoreCinemaRequest;
use App\Http\Requests\Cinema\UpdateCinemaRequest;
use App\Http\Requests\CinemaPosterRequest;
use App\Models\Cinema;
use App\Services\Admin\CinemaService;
use Illuminate\Http\Request;

class CinemaController extends Controller
{

    private CinemaService $cinemaService;

    public function __construct(CinemaService $cinemaService)
    {
        $this->cinemaService = $cinemaService;
    }

    public function index()
    {
        $cinemas = $this->cinemaService->index();

        return view('admin.cinemas.cinema', ['cinemas' => $cinemas]);
    }

    public function create()
    {
        return view('admin.cinemas.create');
    }

    #[NoReturn] public function store(StoreCinemaRequest $request, CinemaPosterRequest $reqPoster)
    {
        $data = $request->validated();

        $poster = $reqPoster->validated();

        $this->cinemaService->store($data, $poster['poster']);

        return redirect()->route('cinema.index');
    }

    public function show(Cinema $cinema)
    {
        return view('admin.cinemas.show', ['cinema' => $cinema]);
    }

    public function edit(Cinema $cinema)
    {
        return view('admin.cinemas.edit', ['cinema' => $cinema]);
    }

    public function uploadSliderPhotos(Request $reqSlider,$id)
    {
        $slider = $reqSlider->file('sliders');

        $this->cinemaService->upload($slider,$id);

        return response()->json([
            'success' => true,
            'message' => 'Successfully uploaded file.',
        ]);
    }

    public function createSliderPhotos($id)
    {
        return view('admin.cinemas.sliders', ['id' => $id]);
    }

    public function update(UpdateCinemaRequest $request, CinemaPosterRequest $reqPoster, Cinema $cinema)
    {
        $data = $request->validated();

        $images = $reqPoster->validated();

        $this->cinemaService->update($cinema, $data, $images);

        return redirect()->route('cinema.show', ['cinema' => $cinema]);
    }

    public function destroy($id)
    {
        $this->cinemaService->destroy($id);
        return redirect()->route('cinema.index');
    }

    public function trash()
    {
        $trash_cinemas = $this->cinemaService->trash();
        return view('admin.cinemas.cinema_trash', ['cinemas' => $trash_cinemas]);
    }

    public function restore($id)
    {
        $this->cinemaService->restore($id);
        return redirect()->route('cinema.index');
    }

}
