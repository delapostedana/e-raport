<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eskul;
use App\EskulDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EskulController extends Controller
{

    public function eskul(){
        $eskul = DB::table('eskuls')->get();
        return view('eskul', ['eskul' => $eskul]);
    }

    public function eskulTambah(){
        return view('eskul_tambah');
    }

    public function prosesTambah(Request $request){
        // return view('eskul_tambah');
        DB::table('eskuls')->insert(
            ['nama' => $request->nama]
        );
        return redirect('eskul')->with('status','Data berhasil ditambahkan');
    }

    public function eskulEdit($id){
        $eskul = DB::table('eskuls')->where('id',$id)->get();
        return view( 'eskul_edit', ['eskul' => $eskul] );
    }

    public function update(Request $request){
        // return view('eskul_tambah');
        DB::table('eskuls')->where('id', $request->id)->update(
            ['nama' => $request->nama]
        );
        return redirect('eskul')->with('status','Data berhasil diedit');
    }

    public function eskulHapus($id){
        // return view('eskul_tambah');
        DB::table('eskuls')->where('id', $id)->delete();
        return redirect('eskul')->with('status','Data berhasil diedit');
    }
}
