<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;
use Illuminate\Support\Facades\DB;

class KarirController extends Controller
{
    //
    public function index(){
        $data = Karir::all();
        return view("karir.karir",compact('data'));
    }

    public function detail($id){
        $karir = Karir::find($id);
        return view("karir.detailkarir",compact('karir'));
    }

    public function searchkarir(Request $request)
    {
        $cari = $request->searchkarir;
        // dd($cari);
        $data= DB::table('karirs')->where('TITLE', 'like', '%' . $cari . '%')->paginate(5);
        

        return view('karir.karir', compact('data'));
    }
}
