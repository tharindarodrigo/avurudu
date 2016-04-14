<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\KanaMutti;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class KanaMuttiController extends Controller
{
    public function __construct()
    {
        if (!auth()->check()) {
            return Redirect::to('login')->send();
        }
    }

    public function getGame()
    {

        if (KanaMutti::where('user_id', Auth::id())->first()) {
            return Redirect::to('/')->send();
        }
        return view('kanaMutti.index');
    }

    public function setData()
    {
        $x = $_POST['time'];
        $y = $_POST['attempts'];

        if (KanaMutti::create(['time'=> $x, 'attempts'=>$y, 'user_id'=> Auth::id()])) {
            return Response::json('Created');
        }

    }
}
