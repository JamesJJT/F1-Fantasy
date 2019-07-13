<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FantasyTeam extends Model
{
    protected $table = 'fantasy_teams';

    protected $primarykey = 'id';

    protected $fillable = [
        'name', 'points', 'value',
    ];
}
