<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestMailController extends Controller
{
	public function mail() {
	    $to_name = 'Adam Burgett';
		$to_email = 'asburgett@gmail.com';
		Mail::to($to_email)->send(new SendMailable($name));
		return 'Email was sent';
	}
}
