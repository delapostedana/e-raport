<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Carbon;
use App\User;
use App\Kelas;

class AdminController extends Controller
{
    public function admin(){
        $admin = User::where('role_id', '1')->get();
        return view('admin/admin', compact('admin'));
    }

    public function adminTambah(){
        return view('admin/admin_tambah');
    }

    public function prosesTambah(Request $request){
        // create nomor induk
        $AWAL = 'A';
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
                'alamat'        => $request->alamat,
                'no_hp'         => $request->no_hp,
                'role_id'       => 1,
                'nomor_induk'   => $no_induk,
                'email'         => $request->email,
                'password'      => Hash::make(12345678),
                'foto'          => "default.png",
            )
        );
        return redirect('admin')->with('status','Data berhasil ditambahkan');
    }

    public function adminEdit($id){
        $admin = DB::table('users')->where('id',$id)->get();
        return view( 'admin/admin_edit', ['admin' => $admin]);
    }

    public function update(Request $request){
        // validation
        // $this->validate($request,[
        //     'email' => 'required|email|max:255|unique:users',
        // ]);
        DB::table('users')->where('id', $request->id)->update(
            array(
                'nama'      => $request->nama,
                // 'email'     => $request->email,
                'alamat'    => $request->alamat,
                'no_hp'     => $request->no_hp,
                'kelas_id'  => $request->kelas
            )
        );
        return redirect('admin')->with('status','Data berhasil diedit');
    }

    public function adminHapus($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('admin')->with('status','Data berhasil dihapus');
    }
}
