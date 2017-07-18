<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Poetry;
use DB;
use Auth;
use Carbon;

class PoetryController extends Controller
{
    

    function create(){

    	if(Auth::check()){

    		return view('poetry.create-poem');
    	}else{

    		return redirect('/login');
    	}

    	
    }

    public function insert(Request $request){

    	//return $request->title;

    	$this->validate($request,[

    		'title' => 'required|max:225',
    		'body' => 'required'
    		]);

    	$poem=$request->body;

    	//return $poem;

    	$rand=Auth::user()->id .rand(0,999);
    	Auth::user()->name;
    	$poem_id=Auth::user()->name .$rand;

    	//return $poem_id;

    	//return Carbon::now();

    $post= new \App\Poetry; 
    	$post->create(['title' => $request->title,
    		'body' => $request->body,
    		'author' => Auth::user()->id,
    		'published_at' => Carbon::now(),
    		'pid' => $poem_id
    		
    		]);

    	return redirect('/home');
    }


}
