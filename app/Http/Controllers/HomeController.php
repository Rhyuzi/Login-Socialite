<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;
use App\Models\BannerIklan;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $ads = Iklan::where('tampilkan',1)->get();
        $bannerIklan = BannerIklan::where('tampilkan',3)->get();
        return view('home',compact('ads','bannerIklan'));
    }
}
