<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HafalanDetailController extends Controller
{
    public function hafalanDetail($idHafalan){
        $hafalanDetail = DB::table('hafalan_details')->where('hafalan_id', $idHafalan)->get();
        return view('hafalanDetail/hafalanDetail', ['hafalanDetail' => $hafalanDetail], ['idHafalan' => $idHafalan]);
    }

    public function hafalanDetailTambah($idHafalan){
        return view('hafalanDetail/hafalanDetail_tambah', ['idHafalan' => $idHafalan]);
    }

    public function prosesTambah(Request $request){
        DB::table('hafalan_details')->insert(
            array(
            'nama'          => $request->nama,
            'hafalan_id'    => $request->hafalan_id
            )
        );
        return redirect('hafalanDetail/'.$request->hafalan_id)->with('status','Data berhasil ditambahkan');
    }

    public function hafalanDetailEdit($id){
        $hafalanDetail = DB::table('hafalan_details')->where('id',$id)->get();
        return view( 'hafalanDetail/hafalanDetail_edit', ['hafalanDetail' => $hafalanDetail] );
    }

    public function update(Request $request){
        DB::table('hafalan_details')->where('id', $request->id)->update(
            ['nama' => $request->nama]
        );
        return redirect('hafalanDetail/'.$request->hafalan_id)->with('status','Data berhasil diedit');
    }

    public function hafalanDetailHapus($id, $idHafalan){
        DB::table('hafalan_details')->where('id', $id)->delete();
        return redirect('hafalanDetail/'.$idHafalan)->with('status','Data berhasil dihapus');
    }
}
