<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
        DB::table('users')->insert(
            array(
                'nama'      => $request->nama,
                'alamat'    => $request->alamat,
                'no_hp'     => $request->no_hp,
                'role_id'   => 1
            )
        );
        return redirect('admin')->with('status','Data berhasil ditambahkan');
    }

    public function adminEdit($id){
        $admin = DB::table('users')->where('id',$id)->get();
        return view( 'admin/admin_edit', ['admin' => $admin]);
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
        return redirect('admin')->with('status','Data berhasil diedit');
    }

    public function adminHapus($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('admin')->with('status','Data berhasil dihapus');
    }
}
