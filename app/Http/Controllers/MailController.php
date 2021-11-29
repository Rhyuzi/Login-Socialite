<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
	
    public function index(){
 
		Mail::to("tesazi@mailnesia.com")->send(new MyTestMail());
 
		return "Email telah dikirim";
 
	}
    public function sendReq(Request $request){
		$email = $request->email;
 
		Mail::to($email)->send(new MyTestMail());
		Session::flash('sukses','Email Berhasil Dikirim!');
 
		return redirect()->route('marketing-campaign');
 
	}
	public function emailBlast(){
		$getEmail = User::select('email')->where('role','user')->get();
		Mail::to($getEmail)->send(new MyTestMail());

		Session::flash('berhasil','Email Berhasil Dikirim email user!');
 
		return redirect()->route('marketing-campaign');
	}
}