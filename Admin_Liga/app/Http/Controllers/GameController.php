<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
  
    
    // todos los juegos con sus respectivos goles y el jugador que anoto cada gol en la ruta /games2
    public function index()
    {
        $games = Game::with('goals.player')->get();
        return $games;
    }

    //todos los juegos con los equipos que se enfrentaron y los goles marcados y que jugador los anoto en la ruta /games2
    public function index2()
    {
        $games2 = Game::with('teams', 'goals.player')->get();
        return $games2;
    }


}
