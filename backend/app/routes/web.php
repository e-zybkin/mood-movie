<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin.index');
});
Route::group(['prefix' => 'admin/cinema'], function () {
    Route::get('/trash', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'trash'])
        ->name('cinema.trash.index');
    Route::get('/trash/{cinema}', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'restore'])
        ->name('cinema.restore');
    Route::post('/cinema/sliders/{cinema}', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'uploadSliderPhotos'])
        ->name('cinema.sliders');
    Route::get('/cinema/add_sliders/{cinema}', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'createSliderPhotos'])
        ->name('cinema.sliders.add');

    Route::get('/', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'index'])
        ->name('cinema.index');
    Route::get('/create', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'create'])
        ->name('cinema.create');
    Route::post('/', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'store'])
        ->name('cinema.store');
    Route::get('/{cinema}', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'show'])
        ->name('cinema.show');
    Route::get('/{cinema}/edit', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'edit'])
        ->name('cinema.edit');
    Route::patch('/update/{cinema}', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'update'])
        ->name('cinema.update');
    Route::delete('/{cinema}', [\App\Http\Controllers\admin\cinema\CinemaController::class, 'destroy'])
        ->name('cinema.delete');
});

Route::group(['prefix' => 'admin/films'], function () {
    Route::get('/trash', [\App\Http\Controllers\admin\cinema\FilmController::class, 'trash'])
        ->name('film.trash.index');
    Route::get('/trash/{film}', [\App\Http\Controllers\admin\cinema\FilmController::class, 'restore'])
        ->name('film.restore');

    Route::get('/', [\App\Http\Controllers\admin\cinema\FilmController::class, 'index'])
        ->name('film.index');
    Route::get('/create', [\App\Http\Controllers\admin\cinema\FilmController::class, 'create'])
        ->name('film.create');
    Route::post('/', [\App\Http\Controllers\admin\cinema\FilmController::class, 'store'])
        ->name('film.store');
    Route::get('/{film}', [\App\Http\Controllers\admin\cinema\FilmController::class, 'show'])
        ->name('film.show');
    Route::get('/{film}/edit', [\App\Http\Controllers\admin\cinema\FilmController::class, 'edit'])
        ->name('film.edit');
    Route::patch('/update/{film}', [\App\Http\Controllers\admin\cinema\FilmController::class, 'update'])
        ->name('film.update');
    Route::delete('/{film}', [\App\Http\Controllers\admin\cinema\FilmController::class, 'destroy'])
        ->name('film.delete');
});

