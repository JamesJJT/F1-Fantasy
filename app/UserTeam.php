<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTeam extends Model
{
    protected $table = 'user_teams';

    protected $primarykey = 'id';

    protected $fillable = [
        'user_id', 'driver_1_id','driver_2_id','driver_3_id','driver_4_id','driver_5_id','team_1_id','value','points','wildcard'
    ];
}
