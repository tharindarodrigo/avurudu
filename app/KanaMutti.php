<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KanaMutti extends Model
{
    protected $fillable = [
        'user_id',
        'attempts',
        'time'
    ];
}
