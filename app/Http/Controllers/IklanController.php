<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;

class IklanController extends Controller
{
    public function index(){
        return view('tambah_iklan');
    }
    public function tambahIklan(Request $request){
        $tambahIklan = Iklan::create([
            'link_iklan' => $request->iklan,
        ]);
        return redirect('/iklan/list');
    }
    public function listIklan(){
        $listIklan = Iklan::where('tampilkan', 1)->simplePaginate(3);
        $tidakDitampilkan = Iklan::where('tampilkan', 0)->simplePaginate(3);
        return view('back-end.iklan',compact('listIklan','tidakDitampilkan'));
    }
    public function hapus($id){
        $hapus = Iklan::find($id);
        $hapus->delete();
        
        return redirect('iklan/list');
        
    }
    public function showAds()
    {
        $ads = Iklan::where('tampilkan', 1)->get();
        return view('auth.login',compact('ads'));
    }

}
