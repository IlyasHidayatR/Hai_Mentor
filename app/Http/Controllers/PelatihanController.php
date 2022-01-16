<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan;

class PelatihanController extends Controller
{
    //
    public function index(){
        $data = Pelatihan::all();
        return view("pelatihan.pelatihan",compact('data'));
    }

    public function detail($id){
        $pelatihan = Pelatihan::find($id);
        return view("pelatihan.detailpelatihan",compact('pelatihan'));
    }
}
