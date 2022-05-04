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

