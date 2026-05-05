<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\President;

class PresidentController extends Controller
{
    //consulta eloquent todos los presidentes
    public function index()
    {
        $presidents = President::all();
        return $presidents;
    }

    //consulta eloquent todos los presidentes con sus equipos en la ruta /presidents2
    public function index2()
    {
        $presidents2 = President::with('team')->get();
        return $presidents2;
    }
}
