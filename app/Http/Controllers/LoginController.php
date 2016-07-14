<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}
	
    public function getLogin()
    {
    	return view('login.login');
    }

    public function postLogin(Request $request)
    {
    	if(Auth::attempt([
    		'email' => $request->email,
    		'password' => $request->password
    		]))
    	{
            if(Auth::user()->roles_id == 1){

                return redirect('/adminDashboard');

            }elseif (Auth::user()->roles_id == 2){

                return redirect('/userDashboard');

            }
    	}else 
    	{
    		return "Wrong username or password";
    	}
    }
}
