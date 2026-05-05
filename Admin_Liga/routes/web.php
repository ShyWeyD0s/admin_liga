<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TeamGameController;
use App\Http\Controllers\GoalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//consultas de los controladores

Route::get('/teams', 
    [TeamController::class, 'index']
);
Route::get('/teams2', 
    [TeamController::class, 'index2']
);
Route::get('/presidents', 
    [PresidentController::class, 'index']
);
Route::get('/presidents2', 
    [PresidentController::class, 'index2']
);
Route::get('/players', 
    [PlayerController::class, 'index']
);
Route::get('/players2', 
    [PlayerController::class, 'index2']
);
Route::get('/games', 
    [GameController::class, 'index']
);
Route::get('/games2', 
    [GameController::class, 'index2']
);
Route::get('/teamGames', 
    [TeamGameController::class, 'index']
);
Route::get('/teamGames2', 
    [TeamGameController::class, 'index2']
);
Route::get('/goals', 
    [GoalController::class, 'index']
);
Route::get('/goals2', 
    [GoalController::class, 'index2']
);



