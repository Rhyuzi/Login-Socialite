<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;

use Illuminate\Support\Facades\Session;

class IklanController extends Controller
{
    public function __construct()
    {
        $this->middleware('back-auth');
    }
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
        $iklan = Iklan::where('tampilkan', 0)->get();
        $iklan1 = Iklan::where('tampilkan', 1)->get();
        return view('back-end.iklan',compact('listIklan','tidakDitampilkan','iklan','iklan1'));
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
    public function iklanUpdate(Request $request, $id){

        $uploadGambar = Iklan::where('id', $request->id)->update([
            
            'link_iklan' => $request->link_iklan,
            'tampilkan' => $request->status,
        ]);
        Session::flash('sukses','Edit Data Berhasil!');
        return redirect()->route('list-iklan');
    }

}
