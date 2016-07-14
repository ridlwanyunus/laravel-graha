<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function home()
    {
    	return view('layouts.master');
    }

    public function logout()
    {
    	Auth::logout();
		return "Sukses Logout";
    }
}
