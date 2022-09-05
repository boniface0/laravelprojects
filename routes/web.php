<?php
use App\Http\Controllers\TextController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserForm;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use  App\Http\Controllers\users;
use App\Http\Controllers\UsersControllerss;
use App\Http\Controllers\User;

Route::get('/', function(){
	return  view('welcome');
});
Route::view('home', "home");
//Route::view('about',"about");

//ridirect

Route::get('about',function(){
	return redirect('home');
});

//contolller in laravel 8;

//Route::get("users",[users::class,'index']);

//passing data in the controlller
Route::get("users/{user}",[users::class,'index']);

//calling view from route

//Route::get('news/{name}', function($name){
	//return  view('news',['name'=>$name]);
//});

//using controller to return a view

Route::get("news",[UsersControllerss::class,'loadView']);

//passing data through the contoller

Route::get("news",[UsersControllerss::class,'loadView']);

Route::get('new',[NewsController::class,'loadview1']);
Route::post('form',[UserForm::class,'getData']);
Route::view('login',"login");



