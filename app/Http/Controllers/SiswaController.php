<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Kelas;
use Illuminate\Support\Facades\Validator;
use Carbon;


class SiswaController extends Controller
{
    public function siswa(){
        // $siswa = Siswa::all();
        // return view('siswa/siswa', compact('siswa'));
        $siswa = User::where('role_id', '3')->get();
        return view('siswa/siswa', compact('siswa'));
    }

    public function siswaTambah(){
        $kelas = DB::table('kelas')->get();
        return view('siswa/siswa_tambah', ['kelas' => $kelas]);
    }

    public function prosesTambah(Request $request){
        $AWAL = 'S';
        $noUrutAkhir = \App\User::max('id');
        $no = 1;
        $tgl = substr(str_replace( '-', '', Carbon\carbon::now()), 0,8);
        if($noUrutAkhir) {
            $no_induk = $AWAL . $tgl . sprintf("%03s", abs($noUrutAkhir + 1));
        }
        else {
            $no_induk = $AWAL . $tgl .  sprintf("%03s", $no);
        }


        $this->validate($request,[
            'email' => 'required|email|max:255|unique:users',
        ]);
        DB::table('users')->insert(
            array(
                'nama'              => $request->nama,
                'nomor_induk'       => $no_induk,
                'email'             => $request->email,
                'tempat_lahir'      => $request->tempat_lahir,
                'tanggal_lahir'     => $request->tanggal_lahir,
                'password'          => Hash::make(12345678),
                'alamat'            => $request->alamat,
                'nama_ayah'         => $request->nama_ayah,
                'nama_ibu'          => $request->nama_ibu,
                'no_hp'             => $request->no_hp,
                'kelas_id'          => $request->kelas,
                'asal_sekolah'      => $request->asal_sekolah,
                'lingkar_kepala'    => $request->lingkar_kepala,
                'role_id'           => 3,
                'foto'              => "default.png",

            )
        );
        return redirect('siswa')->with('status','Data berhasil ditambahkan');
    }

    public function siswaEdit($id){
        $siswa = DB::table('users')->where('id',$id)->get();
        $kelas = DB::table('kelas')->get();
        return view( 'siswa/siswa_edit', ['siswa' => $siswa],['kelas_id' => $kelas] );
    }

    public function update(Request $request){
        $this->validate($request,[
            'email' => 'required|email|max:255|unique:users',
        ]);
        DB::table('users')->where('id', $request->id)->update(
            array(
                'nama'              => $request->nama,
                'tempat_lahir'      => $request->tempat_lahir,
                'tanggal_lahir'     => $request->tanggal_lahir,
                'alamat'            => $request->alamat,
                'nama_ayah'         => $request->nama_ayah,
                'nama_ibu'          => $request->nama_ibu,
                'no_hp'             => $request->no_hp,
                'kelas_id'          => $request->kelas,
                'asal_sekolah'      => $request->asal_sekolah,
                'lingkar_kepala'    => $request->lingkar_kepala,

            )
        );
        return redirect('siswa')->with('status','Data berhasil diedit');
    }

    public function siswaHapus($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('siswa')->with('status','Data berhasil dihapus');
    }
}
