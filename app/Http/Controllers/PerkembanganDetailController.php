<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PerkembanganDetailController extends Controller
{
    public function perkembanganDetail($idPerkembangan){
        $perkembanganDetail = DB::table('perkembangan_details')->where('perkembangan_id', $idPerkembangan)->get();
        return view('perkembanganDetail/perkembanganDetail', ['perkembanganDetail' => $perkembanganDetail], ['idPerkembangan' => $idPerkembangan]);
    }

    public function perkembanganDetailTambah($idPerkembangan){
        return view('perkembanganDetail/perkembanganDetail_tambah', ['idPerkembangan' => $idPerkembangan]);
    }

    public function prosesTambah(Request $request){
        DB::table('perkembangan_details')->insert(
            array(
            'nama'          => $request->nama,
            'perkembangan_id'    => $request->perkembangan_id
            )
        );
        return redirect('perkembanganDetail/'.$request->perkembangan_id)->with('status','Data berhasil ditambahkan');
    }

    public function perkembanganDetailEdit($id){
        $perkembanganDetail = DB::table('perkembangan_details')->where('id',$id)->get();
        return view( 'perkembanganDetail/perkembanganDetail_edit', ['perkembanganDetail' => $perkembanganDetail] );
    }

    public function update(Request $request){
        DB::table('perkembangan_details')->where('id', $request->id)->update(
            ['nama' => $request->nama]
        );
        return redirect('perkembanganDetail/'.$request->perkembangan_id)->with('status','Data berhasil diedit');
    }

    public function perkembanganDetailHapus($id, $idPerkembangan){
        DB::table('perkembangan_details')->where('id', $id)->delete();
        return redirect('perkembanganDetail/'.$idPerkembangan)->with('status','Data berhasil dihapus');
    }
}
