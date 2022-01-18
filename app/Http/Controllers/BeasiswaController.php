<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;
use Illuminate\Support\Facades\DB;

class BeasiswaController extends Controller
{
    //
    public function index(){
        $data = Beasiswa::all();
        return view("beasiswa.beasiswa",compact('data'));
    }

    public function detail($id){
        $data = Beasiswa::all();
        $beasiswa = Beasiswa::find($id);
        return view("beasiswa.detailbeasiswa",compact('beasiswa'),
        compact('data'));
    }

    public function searchBeasiswa(Request $request)
    {
        $cari = $request->searchbea;
        // dd($cari);
        $data= DB::table('beasiswas')->where('TITLE', 'like', '%' . $cari . '%')->paginate(5);
        

        return view('beasiswa.beasiswa', compact('data'));
    }

}
