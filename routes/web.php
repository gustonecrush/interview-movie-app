<?php

use App\Http\Controllers\MovieController;
use App\Models\Movie;
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

// main page
Route::get('/', [MovieController::class, 'index'])->name('home');

// category page
Route::get('/movie/now-playing', [MovieController::class, 'nowPlaying'])->name(
    'now-playing'
);
Route::get('/movie/popular', [MovieController::class, 'popular'])->name(
    'popular'
);
Route::get('/movie/top-rated', [MovieController::class, 'topRated'])->name(
    'top-rated'
);
Route::get('/movie/upcoming', [MovieController::class, 'upcoming'])->name(
    'upcoming'
);

// crud route
Route::post('/movie', [MovieController::class, 'store']);
Route::put('/movie', [MovieController::class, 'update']);
Route::delete('/movie', [MovieController::class, 'destroy']);

// detail page
Route::get('/movie/{movie:id}', [MovieController::class, 'show']);
