<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\User;
use DB;

class RegisterController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}

    public function getRegister()
    {
    	return view('register.register');
    }

    public function postRegister(Request $request)
    {
    	$user = new user();
    	$user->username = Input::get('username');
    	$user->email = Input::get('email');
    	$user->password = bcrypt(Input::get('password'));
    	$user->roles_id = DB::table('roles')->select('id')->where('rulename', 'user')->first()->id;
    	//dd($user);
    	$user->save();
    	return redirect('login');
    }
}
