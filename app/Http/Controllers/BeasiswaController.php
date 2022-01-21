<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;
use Illuminate\Support\Facades\DB;

class BeasiswaController extends Controller
{
    //
    public function index(){
        $data = Beasiswa::paginate(12);
        return view("beasiswa.beasiswa",compact('data'));
    }

    public function detail($id){
<<<<<<< HEAD
        $data1 = Beasiswa::paginate(4);
        $beasiswa = Beasiswa::find($id);
        return view("beasiswa.detailbeasiswa",compact('beasiswa'),
        compact('data1'));
=======
        $data = Beasiswa::all();
        $beasiswa = Beasiswa::find($id);
        return view("beasiswa.detailbeasiswa",compact('beasiswa'),
        compact('data'));
>>>>>>> 5e72c66617564d578a5da014120cebddf5d283f6
    }

    public function searchBeasiswa(Request $request)
    {
        $cari = $request->searchbea;
        // dd($cari);
        $data= DB::table('beasiswas')->where('TITLE', 'like', '%' . $cari . '%')->paginate(5);
        

        return view('beasiswa.beasiswa', compact('data'));
    }

}
