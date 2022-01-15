<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;

class BeasiswaController extends Controller
{
    //
    public function index(){
        $data = Beasiswa::all();
        return view("beasiswa.beasiswa",compact('data'));
    }

    public function detail($id){
        $beasiswa = Beasiswa::find($id);
        return view("beasiswa.detailbeasiswa",compact('beasiswa'));
    }

}
