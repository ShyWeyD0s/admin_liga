<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamGame extends Model
{
    use HasFactory;

    protected $table = 'team_games';

    protected $fillable = ['team_id', 'game_id'];
}
