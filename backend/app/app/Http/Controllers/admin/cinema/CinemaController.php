<?php

namespace App\Http\Controllers\admin\cinema;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Cinema\StoreCinemaRequest;
use App\Http\Requests\Cinema\UpdateCinemaRequest;
use App\Models\Cinema;

class CinemaController extends BaseController
{
    public function index()
    {
        $cinemas = Cinema::all();
        return view('admin.cinemas.cinema', ['cinemas' => $cinemas]);
    }

    public function create()
    {
        return view('admin.cinemas.create');
    }

    #[NoReturn] public function store(StoreCinemaRequest $request)
    {

        $data = $request->validated();
        $path = $request->file('poster')->store('cinemas_img', 'public');
        $this->service->store($data, $path);

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

    public function update(UpdateCinemaRequest $request, Cinema $cinema)
    {
        $data = $request->validated();
        $path = $request->file('poster')->store('cinemas_img', 'public');

        $this->service->update($cinema, $data, $path);

        return redirect()->route('cinema.show', ['cinema' => $cinema]);
    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->route('cinema.index');
    }

    public function trash()
    {
        $trash_cinemas = $this->service->trash();
        return view('admin.cinemas.cinema_trash', ['cinemas' => $trash_cinemas]);
    }

    public function restore($id)
    {
        $this->service->restore($id);
        return redirect()->route('cinema.index');
    }

}
