<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

	public function maildata(Request $request)
	{
		$name = $request->name;
		$email = $request->email;
		$sub = $request->sub;
		$mess = $request->mess;
		
		Mail::to(env("MAIL_FROM_ADDRESS" ,"hello@example.com"))->send(new SendMail($name, $email, $sub, $mess));

        return redirect()->route('pages.homepage')->with('success', 'Email mandata con successo!');
	}
}
