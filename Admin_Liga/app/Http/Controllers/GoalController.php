<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;

class GoalController extends Controller
{
    //consulta eloquent todos los goles
    public function index()
    {
        $goals = Goal::all();
        return $goals;
    }


    //consulta eloquent todos los goles con sus equipos y jugadores en la ruta /goals2
    public function index2()
    {
        $goals2  = Goal::with('teams', 'players')->get();
        return $goals2;
    }

    
}
