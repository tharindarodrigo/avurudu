<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ObstacleRace;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Mockery\CountValidator\Exception;

class ObstacleRaceController extends Controller
{

    public function __construct()
    {
        if (!auth()->check()) {
            return Redirect::to('login')->send();
        }
    }

    public function index()
    {
        $obstacle = ObstacleRace::where('user_id',Auth::id())->first();
        if ($obstacle) {
            return Redirect::to('obstacle-race/'.$obstacle->id.'/edit');
        }

        return view('obstacleRace.index');
    }

    public function store()
    {
        $input = Input::all();

        $input['user_id'] = Auth::id();
        try{
            $obstacle = ObstacleRace::create($input);
        } catch (Exception $e){
            dd($e);
        }

        if($obstacle){
            return Redirect::to('obstacle-race/'.$obstacle->id.'/edit');
        }
    }

    public function edit($id)
    {
        $user = Auth::user();
        $obstacleRace = ObstacleRace::where('user_id', $user->id)->first();
        return view('obstacleRace.edit', compact('obstacleRace'));
    }

    public function update($id)
    {
        $user = Auth::user();

        $answer = Input::get('answer');
        $obstacleRace = ObstacleRace::where('user_id', $user->id)->first();
        $obstacleRace->answer = $answer;
        $obstacleRace->save();

        Session::flash('global','Your Answer was updated');

        return Redirect::back();
    }
}
