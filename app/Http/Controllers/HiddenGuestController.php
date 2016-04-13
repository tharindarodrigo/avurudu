<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\HiddenGuest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Mockery\CountValidator\Exception;

class HiddenGuestController extends Controller
{
    public function __construct()
    {
        if (!auth()->check()) {
            return Redirect::to('login')->send();
        }
    }

    public function index()
    {
        $hiddenGuest = HiddenGuest::where('user_id',Auth::id())->first();
        if ($hiddenGuest) {
            return Redirect::to('hidden-guest/'.$hiddenGuest->id.'/edit');
        }

        return view('hiddenGuest.index');
    }

    public function store()
    {
        $input = Input::all();

        $input['user_id'] = Auth::id();
        try{
            $hiddenGuest = HiddenGuest::create($input);
        } catch (Exception $e){
            dd($e);
        }

        if($hiddenGuest){
            return Redirect::to('hidden-guest/'.$hiddenGuest->id.'/edit');
        }
    }

    public function edit($id)
    {
        $user = Auth::user();
        $hiddenGuest = HiddenGuest::where('user_id', $user->id)->first();
        return view('hiddenGuest.edit', compact('hiddenGuest'));
    }

    public function update($id)
    {
        $user = Auth::user();

        $answer = Input::get('answer');
        $hiddenGuest = HiddenGuest::where('user_id', $user->id)->first();
        $hiddenGuest->answer = $answer;
        $hiddenGuest->save();

        Session::flash('global','Your Answer was updated');

        return Redirect::back();
    }
}
