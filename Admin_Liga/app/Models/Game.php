<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function teams()
    {
        // relacion de muchos 
        return $this->belongsToMany(Team::class, 'team_games');
    }

    public function goals()
    {   
        // relacion de uno a muchos 
        return $this->hasMany(Goal::class);
    }

    public function teamGames()
    {
        return $this->hasMany(TeamGame::class);
    }
}
