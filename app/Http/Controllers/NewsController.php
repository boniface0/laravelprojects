<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function loadview1(){

    	$data = ['antoo','bony','maingi'];
    	return view('new',['users'=>$data]);
    }
}
