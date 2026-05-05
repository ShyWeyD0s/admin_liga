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

    //consulta eloquent todos los equipos con sus jugadores y presidentes en la ruta /teams2
    public function index2()
    {
        $teams2 = Team::with('players', 'president', 'teamGames')->get();
        return $teams2;
    }
}
