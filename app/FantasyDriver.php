<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FantasyDriver extends Model
{
    /**
     * Table
     *
     * @var string
     */
    protected $table = 'fantasy_driver';

    /**
     * Primary key
     *
     * @var string
     */
    protected $primarykey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'points', 'team','value',
    ];
}
