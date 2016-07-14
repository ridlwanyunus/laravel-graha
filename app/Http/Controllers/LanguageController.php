<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Lang;

use App;

use Session;

class LanguageController extends Controller
{
    public function english(){
        Session::put('language','en');
    	return view('login.login');
    }

    public function indonesia(){
        Session::put('language','id');
    	return view('login.login');
    }
}
