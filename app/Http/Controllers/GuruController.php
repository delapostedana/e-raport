<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Kelas;
use Carbon;

class GuruController extends Controller
{
    public function guru(){
        $guru = User::where('role_id', '2')->get();
        return view('guru/guru', compact('guru'));
    }

    public function guruTambah(){
        $kelas = DB::table('kelas')->get();
        return view('guru/guru_tambah', ['kelas' => $kelas]);
    }

    public function prosesTambah(Request $request){
        // create nomor induk
        $AWAL = 'G';
        $noUrutAkhir = \App\User::max('id');
        $no = 1;
        $tgl = substr(str_replace( '-', '', Carbon\carbon::now()), 0,8);
        if($noUrutAkhir) {
            $no_induk = $AWAL . $tgl . sprintf("%03s", abs($noUrutAkhir + 1));
        }
        else {
            $no_induk = $AWAL . $tgl .  sprintf("%03s", $no);
        }

        // validation
        $this->validate($request,[
            'email' => 'required|email|max:255|unique:users',
        ]);

        // insert to db
        DB::table('users')->insert(
            array(
                'nama'          => $request->nama,
                'nomor_induk'   => $no_induk,
                'email'         => $request->email,
                'alamat'        => $request->alamat,
                'no_hp'         => $request->no_hp,
                'kelas_id'      => $request->kelas,
                'password'      => Hash::make(12345678),
                'role_id'       => 2,
                'foto'          => "default.png",
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
        // validation
        // $this->validate($request,[
        //     'email' => 'required|email|max:255|unique:users',
        // ]);
        // update db
        DB::table('users')->where('id', $request->id)->update(
            array(
                'nama'      => $request->nama,
                'alamat'    => $request->alamat,
                // 'email'     => $request->email,
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
