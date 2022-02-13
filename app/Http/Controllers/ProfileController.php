<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Kelas;

class ProfileController extends Controller
{
    public function index(){
        return view( 'profile/profile');
    }

    public function update(Request $request){
        $foto = $request->file('foto')->getClientOriginalName();
    if($foto != null){
        $this->validate($request,[
            'foto' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('foto');

        // ubah nama
        $nama_file = time().'.'.$request->file('foto')->getClientOriginalExtension();

        $tujuan_upload = public_path('assets/images/users');
        $file->move($tujuan_upload,$nama_file);

        if($request->password==null){
            DB::table('users')->where('id', $request->id)->update(
                array(
                    'nama'              => $request->nama,
                    'tempat_lahir'      => $request->tempat_lahir,
                    'tanggal_lahir'     => $request->tanggal_lahir,
                    'nama_ayah'         => $request->nama_ayah,
                    'nama_ibu'          => $request->nama_ibu,
                    'asal_sekolah'      => $request->asal_sekolah,
                    'lingkar_kepala'    => $request->lingkar_kepala,
                    'no_hp'             => $request->no_hp,
                    'foto'              => $nama_file,
                    'alamat'            => $request->alamat,
                )
            );
        }
        else{
            $this->validate($request,[
                'password' => 'min:8|string',
            ]);
            DB::table('users')->where('id', $request->id)->update(
                array(
                    'nama'              => $request->nama,
                    'tempat_lahir'      => $request->tempat_lahir,
                    'tanggal_lahir'     => $request->tanggal_lahir,
                    'nama_ayah'         => $request->nama_ayah,
                    'nama_ibu'          => $request->nama_ibu,
                    'asal_sekolah'      => $request->asal_sekolah,
                    'lingkar_kepala'    => $request->lingkar_kepala,
                    'password'          => Hash::make($request->password),
                    'no_hp'             => $request->no_hp,
                    'foto'              => $nama_file,
                    'alamat'            => $request->alamat,
                )
            );
        }

    }
    else{
        if($request->password==null){
            DB::table('users')->where('id', $request->id)->update(
                array(
                    'nama'              => $request->nama,
                    'tempat_lahir'      => $request->tempat_lahir,
                    'tanggal_lahir'     => $request->tanggal_lahir,
                    'nama_ayah'         => $request->nama_ayah,
                    'nama_ibu'          => $request->nama_ibu,
                    'asal_sekolah'      => $request->asal_sekolah,
                    'lingkar_kepala'    => $request->lingkar_kepala,
                    'no_hp'             => $request->no_hp,
                    'foto'             => $request->foto,
                    'alamat'            => $request->alamat,
                )
            );
        }
        else{
            $this->validate($request,[
                'password' => 'min:8|string',
            ]);
            DB::table('users')->where('id', $request->id)->update(
                array(
                    'nama'              => $request->nama,
                    'tempat_lahir'      => $request->tempat_lahir,
                    'tanggal_lahir'     => $request->tanggal_lahir,
                    'nama_ayah'         => $request->nama_ayah,
                    'nama_ibu'          => $request->nama_ibu,
                    'asal_sekolah'      => $request->asal_sekolah,
                    'lingkar_kepala'    => $request->lingkar_kepala,
                    'password'          => Hash::make($request->password),
                    'no_hp'             => $request->no_hp,
                    'alamat'            => $request->alamat,
                )
            );
        }
    }

        return redirect('profile')->with('status','Data berhasil diedit');
    }
}
