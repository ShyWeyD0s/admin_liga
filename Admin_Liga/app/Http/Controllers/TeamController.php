<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    //consulta eloquent todos los equipos
    public function index()
    {
        $teams = Team::all();
        return $teams;
    }

    //consulta eloquent todos los equipos con sus presidentes en la ruta /teams2
    public function index2()
    {
        $teams2 = Team::with('president')->get();
        return $teams2;
    }

    // todos los presidentes con sus equipos, los jugadores de cada equipo, los goles y el partido en el cual se hiso ese gol en la ruta /teams3
    public function index3()
    {
        $teams3 = Team::with('president', 'players.goals.game', 'games')->get();
        return $teams3;
    }
}
