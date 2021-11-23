<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagement extends Controller
{
    public function __construct()
    {
        $this->middleware('back-auth');
    }
   
    public function index(){
        return view('back-end.user-mgmt');
    }
}
