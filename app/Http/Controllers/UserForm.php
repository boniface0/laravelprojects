<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{
    function getData(Request $req){

    return $req->input();
    }
}
