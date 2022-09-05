<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\User;

class UsersControllerss extends Controller
{
    function loadView(){
    	//DB::insert('insert into users(name,email,password) values(?,?,?)',[
          // 'antoo','antooh@gmail.com','pass',
    	//]);

	    	 //DB::update('update users set name=? where id =1',['bony']);
	    	 //DB::delete('delete from users where id =?',[1]);
	    	 //$users = DB::select('select * from users');

// using models

    	$user = new User();

    	$user->name = 'antony';

    	$user->save();
	    	 
    	return view('news');
    }
}
