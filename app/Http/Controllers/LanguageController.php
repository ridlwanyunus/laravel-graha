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
        Session::put('locale','en');
    	return \Redirect::back();
    }

    public function indonesia(){
        Session::put('locale','id');
    	return \Redirect::back();
    }
}
