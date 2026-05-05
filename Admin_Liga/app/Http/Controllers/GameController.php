<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    //Consulta Eloquent todos los partidos en la ruta /games
    public function index()
    {
        $games = Game::all();
        return $games;     
    }
    
        
   //Consulta Eloquent todos los partidos con sus equipos y la tabla intermedia
    public function index2()
    {
        $games2 = Game::with('teams', 'teamGames')->get();
        return $games2;
    }
}
