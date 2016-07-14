<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class AdminController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('rule:admin');
	}

	public function home()
	{
		return view('login.admin');
	}

	public function viewUser()
	{
		$datas = DB::select('select * from USERS');
		return view('login.adminView', ['datas' => $datas]);
	}
}
