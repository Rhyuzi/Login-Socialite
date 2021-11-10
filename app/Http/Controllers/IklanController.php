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
        $listIklan = Iklan::all();
        return view('iklan',compact('listIklan'));
    }
    public function hapus($id){
        $hapus = Iklan::find($id);
        $hapus->delete();
        
        return redirect('iklan/list');
        
    }

}
