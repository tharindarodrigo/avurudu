<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DriftingTreeController extends Controller
{
    public function getGame()
    {
        return view('driftingTree.index');
    }
}
