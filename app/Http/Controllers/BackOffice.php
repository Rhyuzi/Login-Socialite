<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Iklan;
use App\Models\BannerIklan;
use App\Models\Email;
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
        $countUser = User::where('role','user')->count();
        $countBannerIklan = BannerIklan::count();
        $date = date('Y-m-d');
        $bulan = date('M');
        $userBaru = User::where('created_at','like',"%".$date."%")->where('role', 'user')->get();
        $emailSend = Email::where('created_at','like',"%".$date."%")->simplePaginate(5);

        $chart = (new LarapexChart)->setType('area')
        ->setTitle('Total Akumulatif Data')
        ->setSubtitle('Data Bulan '.$bulan)
        ->setXAxis([
            'Jumlah Ads', 'Jumlah USer','Jumlah Banner iklan'
        ])
        ->setDataset([
            [
                'name'  =>  'Active Users',
                'data'  =>  [$countAds, $countUser,$countBannerIklan]
            ]
        ]);

        return view('back-end.dashboard',compact('iklan','countUser','countAds','userBaru','chart','countBannerIklan','emailSend'));
    }
    public function email(){
        return view('back-end.marketing-campaign');
    }
    public function logoutBack(Request $request){
        Auth::logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect()->route('login-back-office');
    }
    public function userManagement(){
        $user = User::where('role','user')->get();
        return view('back-end.user-mgmt',compact('user'));
    }
}