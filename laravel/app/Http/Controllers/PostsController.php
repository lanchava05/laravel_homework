<?php

namespace App\Http\Controllers;

use App\Posts;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function __construct(){
		$this->middleware("CanPost");
       
    }
    public function index()
    {
    	return view("post.index",["posts"=>Posts::get()]);
    	
    }
    public function create()
    {
    	return view("post.create");
    }
    public function store(Request $request)
    {
    	/*$post=new Posts;
    	$post->title=$request->input("title");
    	$post->text=$request->input("text");
    	$post->save();*/
    	Posts::create([
    		"title"=>$request->input("title"),
    		"description"=>$request->input("description"),
    	]);
    }
}