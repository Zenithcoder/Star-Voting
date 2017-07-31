<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class UserController extends Controller
{
    public function getSignup(){
    	return view('user.signup');
    }

    public function postSignup(Request $request){

    	$this->validate($request, [
    		'email' => 'email|required|unique:users',
    		'password' => 'required'             
    		]);

    	$user = new User([
    		'name' => $request->input('name'),
    		'email' => $request->input('email'),
    		'password' => bcrypt($request->input('password'))
    		]);

    	$user->save();

        Auth::login($user);

    	return redirect()->route('home.vote');
    }

		public function getSignin(){

		return view('user.signin');
			}

		public function postSignin(Request $request){
				$this->validate($request, [
    		'email' => 'email|required',
    		'password' => 'required|min:4'
    		]);
				if(Auth::attempt([
    		'email' => $request->input('email'),
    		'password' => $request->input('password')])){
					return redirect()->route('home.vote');
    		}

    		return redirect()->back();

		}

		public function getProfile(){
			return view('user.profile');
		}

		public function getLogout(Request $request){
			Auth::logout();
            
			return redirect('/');
		}
}
