<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamGame;

class TeamGameController extends Controller
{
    //consulta eloquent todos los registros de team_games
    public function index()
    {
        $teamGames = TeamGame::all();
        return $teamGames;
    }

    //consulta eloquent todos los registros con sus equipos y partidos
    public function index2()
    {
        $teamGames2 = TeamGame::with('team', 'game')->get();
        return $teamGames2;
    }
}
