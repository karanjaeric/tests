<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }
    public function chart()
    {
        $a = 10; $b = 20; $c = 30; $d = 40; $e = 50;
        return view('layouts.dashboard',compact('a','b','c','d','e'));
    }
}
