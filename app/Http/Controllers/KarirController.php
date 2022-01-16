<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;
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
}
