<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionsController extends Controller
{
    public function __construct(){
        $this->middleware('guest', ['except'=>'destroy']);
    }
    public function create(){
        return view('session.create');
    }
    public function store(){
        if(!Auth::attempt(request(['email', 'password']))){
           return back()->withErrors(
               [
                   'message'=>'check your credentials'
               ]
           );
        };

        return redirect('/')->with('success', 'You are logged in');
    }
    public  function destroy(){
        auth()->logout();

        return redirect('/login');
    }
}
