<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObstacleRace extends Model
{
    protected $fillable = [
        'answer',
        'user_id'
    ];
}
