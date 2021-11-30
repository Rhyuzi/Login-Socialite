<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Email;
use Illuminate\Support\Facades\Session;
use Auth;

class MailController extends Controller
{
	
    public function index(){
 
		Mail::to("tesazi@mailnesia.com")->send(new MyTestMail());
 
		return "Email telah dikirim";
 
	}
    public function sendReq(Request $request){
		$email = $request->email;
 
		$sendEmail = Mail::to($email)->send(new MyTestMail());
		$sendEmailToDb = Email::create([
			'pengirim' => Auth::user()->name ,
			'email_tujuan' => $email
		 ]);
		Session::flash('sukses','Email Berhasil Dikirim!');
 
		return redirect()->route('marketing-campaign');
 
	}
	public function emailBlast(){
		$getEmail = User::select('email')->where('role','user')->get();
		$getEmail2 = User::all();
		$sendEmail = Mail::to($getEmail)->send(new MyTestMail());

		foreach($getEmail as $g){
			$sendEmailToDb = Email::create([
				'pengirim' => Auth::user()->name ,
				'email_tujuan' => $g->email
			 ]);
		}
		Session::flash('berhasil','Email Berhasil Dikirim email user!');
 
		return redirect()->route('marketing-campaign');
	}
}