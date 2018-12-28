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
       // $this->middleware('auth');
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $categories = \App\category::all();   
        return view('index',['categories'=>$categories]);
    }
    
    public function welcom()
    {
        return view('welcome');
    }
    
    public function font()
    {
        $flights = \App\category::all();
        return view('font',['flights'=>$flights]);
    }
}
