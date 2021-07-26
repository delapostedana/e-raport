<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{
    public function siswa(){
        $siswa = Siswa::all();
        // return $siswa;
        // $siswa = DB::table('siswas')->get();
        return view('siswa/siswa', compact('siswa'));
    }

    public function siswaTambah(){
        $kelas = DB::table('kelas')->get();
        return view('siswa/siswa_tambah', ['kelas' => $kelas]);
    }

    public function prosesTambah(Request $request){
        DB::table('siswas')->insert(
            array(
                'nama'          => $request->nama,
                'tempat_lahir'  => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat'        => $request->alamat,
                'nama_ayah'     => $request->nama_ayah,
                'nama_ibu'      => $request->nama_ibu,
                'no_hp'         => $request->no_hp,
                'kelas'         => $request->kelas
            )
        );
        return redirect('siswa')->with('status','Data berhasil ditambahkan');
    }

    public function siswaEdit($id){
        $siswa = DB::table('siswas')->where('id',$id)->get();
        $kelas = DB::table('kelas')->get();
        return view( 'siswa/siswa_edit', ['siswa' => $siswa],['kelas' => $kelas] );
    }

    public function update(Request $request){
        DB::table('siswas')->where('id', $request->id)->update(
            array(
                'nama'          => $request->nama,
                'tempat_lahir'  => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat'        => $request->alamat,
                'nama_ayah'     => $request->nama_ayah,
                'nama_ibu'      => $request->nama_ibu,
                'no_hp'         => $request->no_hp,
                'kelas'         => $request->kelas
            )
        );
        return redirect('siswa')->with('status','Data berhasil diedit');
    }

    public function siswaHapus($id){
        DB::table('siswas')->where('id', $id)->delete();
        return redirect('siswa')->with('status','Data berhasil dihapus');
    }
}
