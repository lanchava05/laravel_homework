<?php

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
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/testroute",function(){

	return view("guest.form");
});

//route::post("/testpost",function(Request $req ){
	//$data=[
		//["name"=>$req->post()['name'],]

	//];
	//return view("guest.table",["newdata"=>$data]);
//})->name("testpostroute");



route::get("/enter",function(){
	return view("homework.main");
});
route::post("/showresult",function(request $req){
	$data=[
		[
			"name"=>$req->post()['name'],
			"lastname"=>$req->post()['lastname'],
			"address"=>$req->post()['address'],
			"bio"=>$req->post()['bio'],
			"birthdate"=>$req->post()['birthdate'],
		],

		
	];


	return view("/homework.showresults",["dataresult"=>$data]);
})->name("getresult");

route::get("/index",function(){
	return view("guest.index");

});