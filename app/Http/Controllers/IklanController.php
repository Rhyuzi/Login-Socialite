<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;
use App\Models\BannerIklan;

use Illuminate\Support\Facades\Session;

class IklanController extends Controller
{
    public function index(){
        return view('tambah_iklan');
    }
    public function tambahIklan(Request $request){
        $video = $request->file('video');

        if($video == null){
            $tambahIklan = Iklan::create([
                'link_iklan' => $request->iklan,
                'nama_video' => null,
                'tampilkan'  => 0
            ]);
            return redirect()->route('list-iklan');
        }else{
            $video->move("iklan/video/", $video->getClientOriginalName());
            $tambahIklan = Iklan::create([
                'link_iklan' => $request->iklan,
                'nama_video' => $video->getClientOriginalName(),
                'tampilkan'  => 0
            ]);
            return redirect()->route('list-iklan');
        }
        return redirect()->route('list-iklan');
      
    }
    public function listIklan(){
        $listIklan = Iklan::where('tampilkan', 1)->simplePaginate(3);
        $tidakDitampilkan = Iklan::where('tampilkan', 0)->simplePaginate(3);
        $iklan = Iklan::where('tampilkan', 0)->get();
        $iklan1 = Iklan::where('tampilkan', 1)->get();
        $bannerIklan1 = BannerIklan::where('tampilkan', 1)->get();
        $bannerIklan0 = BannerIklan::where('tampilkan', 0)->get();
        return view('back-end.iklan',compact('listIklan','tidakDitampilkan','iklan','iklan1','bannerIklan1','bannerIklan0'));
    }
    public function hapus($id){
        $hapus = Iklan::find($id);
        $hapus->delete();
        
        return redirect()->route('list-iklan');
        
    }
    public function iklanUpdate(Request $request, $id){

        $uploadGambar = Iklan::where('id', $request->id)->update([
            
            'link_iklan' => $request->link_iklan,
            'tampilkan' => $request->status,
        ]);
        Session::flash('sukses','Edit Data Berhasil!');
        return redirect()->route('list-iklan');
    }
    public function tambahBannerIklan(Request $request){
        $banner = $request->file('gambar');
        if($video == null){
            $tambahIklan = Iklan::create([
                'link_iklan' => $request->iklan,
                'gambar' => null,
                'tampilkan'  => 0
            ]);
            return redirect()->route('list-iklan');
        }else{
            $banner->move("iklan/gambar/", $banner->getClientOriginalName());
            $tambahIklan = BannerIklan::create([
                'link_iklan' => $request->link_iklan,
                'gambar' => $banner->getClientOriginalName(),
                'tampilkan'  => 1
            ]);
            return redirect()->route('list-iklan');
        }
        return redirect()->route('list-iklan');
    }

    public function banneriklanUpdate(Request $request, $id){

        $uploadGambar = BannerIklan::where('id', $request->id)->update([
            'link_iklan' => $request->link_iklan,
            'tampilkan'  => $request->status
        ]);
        Session::flash('sukses','Edit Data Berhasil!');
        return redirect()->route('list-iklan');
    }

    public function hapusBannerIklan($id){
        $hapus = BannerIklan::find($id);
        $hapus->delete();
        
        return redirect()->route('list-iklan');
        
    }

}