<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/main'], function () {
    Route::get('/', [\App\Http\Controllers\api\IndexCinemaController::class, 'index'])->name('api.cinema.index');
    Route::post('/send/feedback', [\App\Http\Controllers\api\IndexCinemaController::class, 'storeFeedback'])
        ->name('api.cinema.store.fb');
    Route::post('/send/review', [\App\Http\Controllers\api\IndexCinemaController::class, 'storeReview'])
        ->name('api.cinema.store.rw');
});

Route::group(['prefix' => 'cinema/{cinema}'], function () {
    Route::get('/sliders', [\App\Http\Controllers\api\IndexCinemaController::class, 'getSliders'])
        ->name('api.cinema.sliders');
    Route::get('/about', [\App\Http\Controllers\api\IndexCinemaController::class, 'getAbout'])
        ->name('api.cinema.about');
    Route::get('/', [\App\Http\Controllers\api\IndexCinemaController::class, 'show'])
        ->name('api.cinema.show');
    Route::get('/reviews', [\App\Http\Controllers\api\IndexCinemaController::class, 'getReviews'])
        ->name('api.cinema.reviews');
    Route::get('/films', [\App\Http\Controllers\api\IndexCinemaController::class, 'getFilms'])
        ->name('api.cinema.films');
});

