<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;
use Illuminate\Support\Facades\DB;

class KarirController extends Controller
{
    //
    public function index(){
        $data = Karir::paginate(12);
        return view("karir.karir",compact('data'));
    }

    public function detail($id){
        $karir = Karir::find($id);
<<<<<<< HEAD
        $data1 = Karir::paginate(4);
        return view("karir.detailkarir",compact('karir'),
        compact('data1'));
=======
        $data = Karir::all();
        return view("karir.detailkarir",compact('karir'),
        compact('data'));
>>>>>>> 5e72c66617564d578a5da014120cebddf5d283f6
    }

    public function searchKarir(Request $request)
    {
        $cari = $request->searchkarir;
        // dd($cari);
        $data= DB::table('karirs')->where('TITLE', 'like', '%' . $cari . '%')->paginate(5);
        

        return view('karir.karir', compact('data'));
    }
}
