<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriftingTree extends Model
{
    protected $fillable = [
        'user_id',
        'attempts',
    ];
}
