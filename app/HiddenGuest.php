<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HiddenGuest extends Model
{
    protected $fillable = [
        'user_id',
        'answer'
    ];
}
