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
        $data1 = Beasiswa::paginate(4);
        $beasiswa = Beasiswa::find($id);
        return view("beasiswa.detailbeasiswa",compact('beasiswa'),
        compact('data1'));
    }

    public function searchBeasiswa(Request $request)
    {
        $cari = $request->searchbea;
        // dd($cari);
        $data= DB::table('beasiswas')->where('TITLE', 'like', '%' . $cari . '%')->paginate(5);
        

        return view('beasiswa.beasiswa', compact('data'));
    }

}
