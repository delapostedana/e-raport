<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HafalanController extends Controller
{
    public function hafalan(){
        $hafalan = DB::table('hafalans')->get();
        return view('hafalan/hafalan', ['hafalan' => $hafalan]);
    }

    public function hafalanTambah(){
        return view('hafalan/hafalan_tambah');
    }

    public function prosesTambah(Request $request){
        DB::table('hafalans')->insert(
            ['nama' => $request->nama]
        );
        return redirect('hafalan')->with('status','Data berhasil ditambahkan');
    }

    public function hafalanEdit($id){
        $hafalan = DB::table('hafalans')->where('id',$id)->get();
        return view( 'hafalan/hafalan_edit', ['hafalan' => $hafalan] );
    }

    public function update(Request $request){
        DB::table('hafalans')->where('id', $request->id)->update(
            ['nama' => $request->nama]
        );
        return redirect('hafalan')->with('status','Data berhasil diedit');
    }

    public function hafalanHapus($id){
        DB::table('hafalans')->where('id', $id)->delete();
        return redirect('hafalan')->with('status','Data berhasil dihapus');
    }
}
