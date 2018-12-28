<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function time(){        
     
        return view('layouts.clock');        
    }
}
