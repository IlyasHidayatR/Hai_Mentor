<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\DB;

class PelatihanController extends Controller
{
    //
    public function index(){
        $data = Pelatihan::all();
        return view("pelatihan.pelatihan",compact('data'));
    }

    public function detail($id){
        $pelatihan = Pelatihan::find($id);
        $data = Pelatihan::all();
        return view("pelatihan.detailpelatihan",compact('pelatihan'),
        compact('data'));
    }

    public function searchPelatihan(Request $request)
    {
        $cari = $request->searchpelat;
        // dd($cari);
        $data= DB::table('pelatihans')->where('TITLE', 'like', '%' . $cari . '%')->paginate(5);
        

        return view('pelatihan.pelatihan', compact('data'));
    }
}
