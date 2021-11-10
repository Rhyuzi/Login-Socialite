<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class MailController extends Controller
{
    public function index(){
 
		Mail::to("azirahayu10rpla@gmail.com")->send(new MyTestMail());
 
		return "Email telah dikirim";
 
	}
    public function sendReq(Request $request){
 
		Mail::to($request->email)->send(new MyTestMail());
 
		return "Email telah dikirim";
 
	}
	public function emailBlast(){
		$getEmail = User::select('email')->get();
		
		Mail::to($getEmail)->send(new MyTestMail());
 
		return "Email telah dikirim";
	}
}
