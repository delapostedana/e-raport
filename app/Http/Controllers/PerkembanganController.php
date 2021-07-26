<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PerkembanganController extends Controller
{
    public function perkembangan(){
        $perkembangan = DB::table('perkembangans')->get();
        return view('perkembangan/perkembangan', ['perkembangan' => $perkembangan]);
    }

    public function perkembanganTambah(){
        return view('perkembangan/perkembangan_tambah');
    }

    public function prosesTambah(Request $request){
        DB::table('perkembangans')->insert(
            ['nama' => $request->nama]
        );
        return redirect('perkembangan')->with('status','Data berhasil ditambahkan');
    }

    public function perkembanganEdit($id){
        $perkembangan = DB::table('perkembangans')->where('id',$id)->get();
        return view( 'perkembangan/perkembangan_edit', ['perkembangan' => $perkembangan] );
    }

    public function update(Request $request){
        DB::table('perkembangans')->where('id', $request->id)->update(
            ['nama' => $request->nama]
        );
        return redirect('perkembangan')->with('status','Data berhasil diedit');
    }

    public function perkembanganHapus($id){
        DB::table('perkembangans')->where('id', $id)->delete();
        return redirect('perkembangan')->with('status','Data berhasil dihapus');
    }
}
