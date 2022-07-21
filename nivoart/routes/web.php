<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\GameController;

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

Route::get('/start', function () {
    return view('welcome');
});

Route::get('/videos', [VideoController::class, 'index']);

Route::get('/songs', [SongController::class, 'show']);

Route::get('gamesoverview', [GameController::class, 'index']);

Route::post('gamesoverview', [GameController::class, 'store']);

Route::get('spielerstellen', [GameController::class, 'create']);

Route::resource('games', '\App\Http\Controllers\GameController');





