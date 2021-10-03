<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Kelas;

class GuruController extends Controller
{
    public function guru(){
        // $guru = DB::table('users')->get();
        // return view('guru/guru', ['guru' => $guru]);
        $guru = User::where('role_id', '2')->get();
        return view('guru/guru', compact('guru'));
    }

    public function guruTambah(){
        $kelas = DB::table('kelas')->get();
        return view('guru/guru_tambah', ['kelas' => $kelas]);
    }

    public function prosesTambah(Request $request){
        DB::table('users')->insert(
            array(
                'nama'      => $request->nama,
                'alamat'    => $request->alamat,
                'no_hp'     => $request->no_hp,
                'kelas_id'  => $request->kelas,
                'role_id'   => 2
            )
        );
        return redirect('guru')->with('status','Data berhasil ditambahkan');
    }

    public function guruEdit($id){
        $guru = DB::table('users')->where('id',$id)->get();
        $kelas = DB::table('kelas')->get();
        return view( 'guru/guru_edit', ['guru' => $guru], ['kelas_id' => $kelas] );
    }

    public function update(Request $request){
        DB::table('users')->where('id', $request->id)->update(
            array(
                'nama'      => $request->nama,
                'alamat'    => $request->alamat,
                'no_hp'     => $request->no_hp,
                'kelas_id'  => $request->kelas
            )
        );
        return redirect('guru')->with('status','Data berhasil diedit');
    }

    public function guruHapus($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('guru')->with('status','Data berhasil dihapus');
    }
}
