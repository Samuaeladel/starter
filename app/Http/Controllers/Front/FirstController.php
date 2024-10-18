<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function getIndex(){
//        $data=[];
//        $data['id']=22;
//        $data['name']='samuel adel';
//        $data=['samuel' ,'adel'];
        $data=[];
//        return view("welcome" )->with('name','samuel del');
        return view('welcome',compact('data'));
    }
}
