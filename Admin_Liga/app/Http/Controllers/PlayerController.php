<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    //

    public function index()
    {
        $players = Player::all();
        return $players;
    }

    public function index2()
    {
        $players2 = Player::with('team', 'goals')->get();
        return $players2;
    }
}
