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

// todos los equipos en la ruta /teams
Route::get('/teams', 
    [TeamController::class, 'index']
);
//todos los equipos con sus presidentes en la ruta /teams2
Route::get('/teams2', 
    [TeamController::class, 'index2']
);
// todos los presidentes con sus equipos, los jugadores de cada equipo, los goles y el partido en el cual se hiso ese gol en la ruta /teams3
Route::get('/teams3', 
    [TeamController::class, 'index3']
);

// todos los presidentes en la ruta /presidents
Route::get('/presidents', 
    [PresidentController::class, 'index']
);
//todos los presidentes con sus equipos en la ruta /presidents2
Route::get('/presidents2', 
    [PresidentController::class, 'index2']
);
// todos los jugadores en la ruta /players
Route::get('/players', 
    [PlayerController::class, 'index']
);
// todos los jugadores con sus equipos en la ruta /players2
Route::get('/players2', 
    [PlayerController::class, 'index2']
);
//todos los juegos con sus respectivos goles y el jugador que anoto cada gol en la ruta /games2
Route::get('/games', 
    [GameController::class, 'index']
);
//todos los juegos con los equipos que se enfrentaron y los goles marcados y que jugador los anoto en la ruta /games2
Route::get('/games2', 
    [GameController::class, 'index2']
);

// todos los registros de team_games en la ruta /teamGames
Route::get('/teamGames', 
    [TeamGameController::class, 'index']
);
//todos los registros con sus equipos y partidos en la ruta /teamGames2
Route::get('/teamGames2', 
    [TeamGameController::class, 'index2']
);
// todos los goles en la ruta /goals
Route::get('/goals', 
    [GoalController::class, 'index']
);
//todos los goles con sus equipos y jugadores en la ruta /goals2
Route::get('/goals2', 
    [GoalController::class, 'index2']
);



