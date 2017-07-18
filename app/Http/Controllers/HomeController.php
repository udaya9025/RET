<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function homepage(){

    if(Auth::check()){

      $poems=DB::table('poetry')->orderBy('published_at','ASEC')->get();

      //return $poems;
      $user_details=DB::table('users')->where('id',Auth::user()->id)->get();

      //return $user_details;

      return view('home')->with('poems',$poems)->with('user_details',$user_details);

    }else{

        return redirect('/login');
    }
   }
}
