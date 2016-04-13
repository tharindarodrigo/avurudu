<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KanaMuttiController extends Controller
{
    public function getGame()
    {
        return view('kanaMutti.index');
    }
}
