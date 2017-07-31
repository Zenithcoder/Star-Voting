<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contestant;
use App\User;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $conts= Contestant::all();

    	return view('index',compact('conts'));
    }
    

    public function home()
    {
       $conts= Contestant::all();
        return view('front',compact('conts'));
    }
 

 	public function vote($id)
    {
    	$uid = Auth::id();
       $voters = User::find($uid);
       $voters->contestant_id = $id;
    	
        $voters->Save();

        return Redirect()->route('home.vote')->with('message', 'Vote Successful');    
    }   
}
