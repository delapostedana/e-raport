<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Eskul;
use App\EskulDetail;

class EskulController extends Controller
{
    //
    public function test(){
        $eskul = Eskul::with('detail')->get();
        $data['eskul'] = $eskul;
        return view('eskul',$data);
    }

    public function coba(){
        // $eskul = \App\EskulDetail::where('nama','Gerak')->first();
        $detail = EskulDetail::find(2);
        dd ($detail->eskul->toArray());
    }
}
