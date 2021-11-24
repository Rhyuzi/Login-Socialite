<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Iklan;

class BackOffice extends Controller
{
    
    public function login(){
        return view('back-end.login-back');
    }
    public function loginBack(Request $request){
    
        if(Auth::attempt($request->only('email','password'))){
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin'){
                return redirect()->route('dashboard');
            }else{
                Session::flash('gagal','Email atau Password Salah!');
                return redirect()->route('login-back-office');
            }
            
        }
        Session::flash('gagal','Email atau Password Salah!');
            return redirect()->route('login-back-office');
    }
    public function index()
    {
        $iklan = Iklan::all();
        $countAds = Iklan::count();
        $countUser = User::count();
        $date = date('Y-m-d');
        $userBaru = User::where('created_at','like',"%".$date."%")->where('role', 'user')->get();
        return view('back-end.dashboard',compact('iklan','countUser','countAds','userBaru'));
    }
    public function email(){
        return view('back-end.marketing-campaign');
    }
}