<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except('showString1');
    }

    public function showString(){
        return "<h1>admin second cont</h1>";
    }
    public function showString0(){
        return "<h1>admin second cont 0</h1>";
    }
    public function showString1(){
        return "<h1>admin second cont 1</h1>";
    }
    public function showString2(){
        return "<h1>admin second cont 2</h1>";
    }
}
