<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Poetry;
use DB;
use Auth;

class PoetryController extends Controller
{
    

    function create(){

    	return view('poetry.create-poem');
    }

    public function insert(Request $request){

    	//return $request->title;

    	$this->validate($request,[

    		'title' => 'required|max:225',
    		'body' => 'required'
    		]);

    	$poem=$request->body;

    	//return $poem;

    $post= new \App\Poetry; 
    	$post->create(['title' => $request->title,
    		'body' => $request->body,
    		'author' => Auth::user()->id,
    		'pid' => 'u11'
    		]);

    	return redirect('/home');
    }


}
