<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class BackOffice extends Controller
{
    public function login(){
        return view('back-end.login-back');
    }
    public function loginBack(Request $request){
    
        if(Auth::attempt($request->only('email','password'))){
            $user = User::where('email',$request->email)->first();
            }if($user->role == 'admin'){
                return redirect()->route('home');
            }else{
                return redirect()->route('login-back-office');
            }
            
            return redirect()->route('login-back-office');
        }
        
    }

