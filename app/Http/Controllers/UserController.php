<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

use App\user;

class UserController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('rule:user');
	}

	public function home()
	{
		return view('login.user');
	}

	public function pageEmail(){
		return view('login.userEmail');
	}

	public function sendEmail(Request $request)
	{
		$to = $request->to;
        $cc = $request->cc;
        $bcc = $request->bcc;
        $subject = $request->subject;
        $name = "Example";
        $content = $request->content;
        $data = [   
                    'to' => $to, 
                    'cc' => $cc, 
                    'bcc' => $bcc, 
                    'subject' => $subject,
                    'name' => $name,
                    'content' => $content
                ];

        Mail::send('email', ['data' => $data], function ($m) use ($data) {
            $m->from('hiddenjustice309@gmail.com', 'Your Application');
            $m->to($data['to'], $data['name']);
            $m->sender('hiddenjustice309@gmail.com', $data['name']);
            $m->cc($data['cc'], $data['name']);
            $m->bcc($data['bcc'], $data['name']);
            $m->subject($data['subject']);
        });
		return view('login.userEmail');
	}
}
