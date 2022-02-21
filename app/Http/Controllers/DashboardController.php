<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kelas;
use App\Eskul;
use App\Hafalan;
use App\perkembangan;


class DashboardController extends Controller
{
    public function index(){
    $data = array([
        'siswa' => User::where('role_id', '3')->get()->count(),
        'guru' => User::where('role_id', '2')->get()->count(),
        'admin' => User::where('role_id', '1')->get()->count(),
        'kelas' => Kelas::all()->count(),
        'eskul' => Eskul::all()->count(),
        'hafalan' => Hafalan::all()->count(),
        'perkembangan' => perkembangan::all()->count(),
    ]);
        return view('dashboard/index', ['data' => $data]);
    }
}
