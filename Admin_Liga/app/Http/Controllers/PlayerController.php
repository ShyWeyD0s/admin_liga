<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    //consulta eloquent todos los jugadores
    public function index()
    {
        $players = Player::all();
        return $players;
    }

    //consulta eloquent todos los jugadores con sus equipos y goles en la ruta /players2
    public function index2()
    {
        $players2 = Player::with('team', 'goals')->get();
        return $players2;
    }
}
