<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\DB;

class PelatihanController extends Controller
{
    //
    public function index(){
        $data = Pelatihan::paginate(12);
        return view("pelatihan.pelatihan",compact('data'));
    }

    public function detail($id){
        $pelatihan = Pelatihan::find($id);
<<<<<<< HEAD
        $data1 = Pelatihan::paginate(4);
        return view("pelatihan.detailpelatihan",compact('pelatihan'),
        compact('data1'));
=======
        $data = Pelatihan::all();
        return view("pelatihan.detailpelatihan",compact('pelatihan'),
        compact('data'));
>>>>>>> 5e72c66617564d578a5da014120cebddf5d283f6
    }

    public function searchPelatihan(Request $request)
    {
        $cari = $request->searchpelat;
        // dd($cari);
        $data= DB::table('pelatihans')->where('TITLE', 'like', '%' . $cari . '%')->paginate(5);
        

        return view('pelatihan.pelatihan', compact('data'));
    }
}
