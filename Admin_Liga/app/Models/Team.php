<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function president()
    {
        return $this->hasOne(President::class);
    }

    public function games()
    {
        return $this->belongsToMany(Game::class, 'team_games');
    }
}
