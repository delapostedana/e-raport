<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    public function kelas(){
        $kelas = DB::table('kelas')->get();
        return view('kelas/kelas', ['kelas' => $kelas]);
    }

    public function kelasTambah(){
        return view('kelas/kelas_tambah');
    }

    public function prosesTambah(Request $request){
        DB::table('kelas')->insert(
            ['nama_kelas' => $request->nama_kelas]
        );
        return redirect('kelas')->with('status','Data berhasil ditambahkan');
    }

    public function kelasEdit($id){
        $kelas = DB::table('kelas')->where('id',$id)->get();
        return view( 'kelas/kelas_edit', ['kelas' => $kelas] );
    }

    public function update(Request $request){
        DB::table('kelas')->where('id', $request->id)->update(
            ['nama_kelas' => $request->nama_kelas]
        );
        return redirect('kelas')->with('status','Data berhasil diedit');
    }

    public function kelasHapus($id){
        DB::table('kelas')->where('id', $id)->delete();
        return redirect('kelas')->with('status','Data berhasil dihapus');
    }
}
