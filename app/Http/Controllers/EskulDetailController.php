<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EskulDetailController extends Controller
{
    public function eskulDetail($idEskul){
        $eskulDetail = DB::table('eskul_details')->where('eskul_id', $idEskul)->get();
        return view('eskulDetail/eskulDetail', ['eskulDetail' => $eskulDetail], ['idEskul' => $idEskul]);
    }

    public function eskulDetailTambah($idEskul){
        return view('eskulDetail/eskulDetail_tambah', ['idEskul' => $idEskul]);
    }

    public function prosesTambah(Request $request){
        DB::table('eskul_details')->insert(
            array(
            'nama'         => $request->nama,
            'eskul_id'     => $request->eskul_id
            )
        );
        return redirect('eskulDetail/'.$request->eskul_id)->with('status','Data berhasil ditambahkan');
    }

    public function eskulDetailEdit($id){
        $eskulDetail = DB::table('eskul_details')->where('id',$id)->get();
        return view( 'eskulDetail/eskulDetail_edit', ['eskulDetail' => $eskulDetail] );
    }

    public function update(Request $request){
        DB::table('eskul_details')->where('id', $request->id)->update(
            ['nama' => $request->nama]
        );
        return redirect('eskulDetail/'.$request->eskul_id)->with('status','Data berhasil diedit');
    }

    public function eskulDetailHapus($id, $idEskul){
        DB::table('eskul_details')->where('id', $id)->delete();
        return redirect('eskulDetail/'.$idEskul)->with('status','Data berhasil dihapus');
    }
}
