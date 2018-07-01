<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theard;
use App\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= \App\Theard::where('user_id',Auth::user()->name)->get();
        return view('home',compact('tasks','user'));
            }

   

}
