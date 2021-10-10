<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\raport;
use App\User;
use App\EskulDetail;
use App\Eskul;
use App\Hafalan;
use App\Hafalan_detail;

class RaportController extends Controller
{
    public function siswa(){
        $siswa = DB::table('users')->where('role_id',3)->get();
        return view( 'raport/raport', ['siswa' => $siswa]);
    }
    public function raport(){
        $eskul= Eskul::with('detail')->get();
        $hafalan= Hafalan::with('detail')->get();
        return view('raport/raport_add', [
            'eskuls'=> $eskul,
            'hafalans'=> $hafalan
            ] );
    }

    public function prosesTambah(Request $request){
        foreach($request->eskul as $id_detailEskul => $nilaiEskul){
            $eskulDetail = EskulDetail::find($id_detailEskul);
            $eskulDetail->raport()->create(
                [
                    "guru_id" => 1,
                    "siswa_id" => 1,
                    "nilai" => $nilaiEskul,
                ]
            );
        }
        foreach($request->hafalan as $id_detailHafalan => $nilaiHafalan){
            $hafalanDetail = Hafalan_detail::find($id_detailHafalan);
            $hafalanDetail->raport()->create(
                [
                    "guru_id" => 1,
                    "siswa_id" => 1,
                    "nilai" => $nilaiHafalan,
                ]
            );
        }
    }

    public function raportEdit($id){
        $raport = Raport::find("siswa_id",$id);
        dd($raport);
        return view( 'raport/raport_edit', ['raport' => $raport]);
    }
}
