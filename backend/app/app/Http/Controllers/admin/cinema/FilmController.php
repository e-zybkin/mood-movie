<?php

namespace App\Http\Controllers\admin\cinema;

use App\Http\Controllers\Controller;
use App\Http\Requests\CinemaPosterRequest;
use App\Http\Requests\Film\StoreFilmRequest;
use App\Http\Requests\Film\UpdateFilmRequest;
use App\Models\Film;
use App\Services\FilmService;
use Illuminate\Http\Request;

class FilmController extends Controller
{

    private FilmService $filmService;

    public function __construct(FilmService $filmService)
    {
        $this->filmService = $filmService;
    }

    public function index()
    {
        $films = $this->filmService->index();
        return view('admin.films.films', ['films' => $films]);
    }

    public function create()
    {
        $cinemas = $this->filmService->create();
        return view('admin.films.create',['cinemas'=>$cinemas]);
    }

    #[NoReturn] public function store(StoreFilmRequest $request, CinemaPosterRequest $reqPoster)
    {
        $data = $request->validated();

        $poster = $reqPoster->validated();

        $this->filmService->store($data, $poster['poster']);

        return redirect()->route('film.index');
    }

    public function show(Film $film)
    {
        return view('admin.films.show', ['film' => $film]);
    }

    public function edit(Film $film)
    {
        $cinemas = $this->filmService->edit();
        return view('admin.films.edit', ['film' => $film,'cinemas'=>$cinemas]);
    }

    public function update(UpdateFilmRequest $request, CinemaPosterRequest $reqPoster, Film $film)
    {
        $data = $request->validated();

        $poster = $reqPoster->validated();

        $this->filmService->update($film, $data, $poster['poster']);

        return redirect()->route('film.show', ['film' => $film]);
    }

    public function destroy($id)
    {
        $this->filmService->destroy($id);
        return redirect()->route('film.index');
    }

    public function trash()
    {
        $trash_films = $this->filmService->trash();
        return view('admin.films.films_trash', ['films' => $trash_films]);
    }

    public function restore($id)
    {
        $this->filmService->restore($id);
        return redirect()->route('film.index');
    }
}
