<?php

namespace App\Http\Controllers;

use App\DriftingTree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class DriftingTreeController extends Controller
{
    public function __construct()
    {
        if (!auth()->check()) {
            return Redirect::to('login')->send();
        }
    }

    public function getGame()
    {
        if (DriftingTree::where('user_id', Auth::id())->first()) {
            return Redirect::to('/')->send();
        }

        return view('driftingTree.index');
    }

    public function setData()
    {
        $x = $_POST['attempts'];


        if (DriftingTree::create([ 'attempts'=>$x, 'user_id'=> Auth::id()])) {
            return Response::json('Created');
        }

    }
}
