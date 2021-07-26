<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public function guru(){
        $guru = DB::table('gurus')->get();
        return view('guru/guru', ['guru' => $guru]);
    }

    public function guruTambah(){
        return view('guru/guru_tambah');
    }

    public function prosesTambah(Request $request){
        // var_dump($request->alamat); die;
        DB::table('gurus')->insert(
            array(
                'nama'     => $request->nama,
                'alamat'   => $request->alamat,
                'no_hp'    => $request->no_hp,
                'kelas'    => $request->kelas
            )
        );
        return redirect('guru')->with('status','Data berhasil ditambahkan');
    }

    public function guruEdit($id){
        $guru = DB::table('gurus')->where('id',$id)->get();
        return view( 'guru/guru_edit', ['guru' => $guru] );
    }

    public function update(Request $request){
        DB::table('gurus')->where('id', $request->id)->update(
            array(
                'nama'     => $request->nama,
                'alamat'   => $request->alamat,
                'no_hp'    => $request->no_hp,
                'kelas'    => $request->kelas
            )
        );
        return redirect('guru')->with('status','Data berhasil diedit');
    }

    public function guruHapus($id){
        DB::table('gurus')->where('id', $id)->delete();
        return redirect('guru')->with('status','Data berhasil dihapus');
    }
}
