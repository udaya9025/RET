<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon;
use \App\Follwers;

class FollowersController extends Controller
{
   function makefollow(Request $request){

   		/*return $request->f_id;*/

   		$follow=new \App\Follwers;

   		$uid=Auth::user()->id;

   		$follow->create(['user_id'=> $uid,
   			'follower_id'=> $request->f_id
   			]);

   		return redirect('/home');
   }
}
