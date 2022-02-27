<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\raport;
use App\User;
use App\EskulDetail;
use App\Eskul;
use App\Hafalan;
use App\Hafalan_detail;
use App\perkembangan;
use App\Perkembangan_detail;
use PDF;

class RaportController extends Controller
{
    public function siswa($id){
        $siswa = DB::table('users')
        ->selectRaw('users.*, ( SELECT COUNT(*) FROM raports WHERE siswa_id = users.id ) AS raport_count')
        ->where('role_id',3)
        ->where('kelas_id',$id)
        ->get();

        return view( 'raport/raport', [
            'siswa' => $siswa
        ]);
    }

    public function raport($idSiswa){
        $siswa = User::where('id', $idSiswa)->get();
        $eskul = Eskul::with('detail')->get();
        $hafalan = Hafalan::with('detail')->get();
        $perkembangan = perkembangan::with('detail')->get();
        return view('raport/raport_add', [
            'eskuls'=> $eskul,
            'hafalans'=> $hafalan,
            'perkembangans'=> $perkembangan,
            'siswas'=> $siswa
            ] );
    }

    public function prosesTambah(Request $request){
        $idSiswa = $request->idSiswa;
        $idDosen = $request->idDosen;
        $idKelas = $request->idKelas;

        foreach($request->eskul as $id_detailEskul => $nilaiEskul){
            $eskulDetail = EskulDetail::find($id_detailEskul);
            $eskulDetail->raport()->create(
                [
                    "guru_id" => $idDosen,
                    "siswa_id" => $idSiswa,
                    "nilai" => $nilaiEskul,
                ]
            );
        }
        foreach($request->hafalan as $id_detailHafalan => $nilaiHafalan){
            $hafalanDetail = Hafalan_detail::find($id_detailHafalan);
            $hafalanDetail->raport()->create(
                [
                    "guru_id" => $idDosen,
                    "siswa_id" => $idSiswa,
                    "nilai" => $nilaiHafalan,
                ]
            );
        }
        foreach($request->perkembangan as $id_detailPerkembangan => $nilaiPerkembangan){
            $perkembanganDetail = Perkembangan_detail::find($id_detailPerkembangan);
            $perkembanganDetail->raport()->create(
                [
                    "guru_id" => $idDosen,
                    "siswa_id" => $idSiswa,
                    "nilai" => $nilaiPerkembangan,
                ]
            );
        }
        return redirect('raport/'.$idKelas )->with('status','Data berhasil ditambahkan');
    }

    public function raportEdit($idSiswa){
        $siswa = User::find($idSiswa);
        $raportSiswa = $siswa->raport;
        $eskul = Eskul::with('detail')->get();
        $hafalan = Hafalan::with('detail')->get();
        $perkembangan = perkembangan::with('detail')->get();

        $hafalanChecked = [
            [
                'key'   => '1',
                'value' => 'Sudah Hafal'
            ],
            [
                'key'   => '2',
                'value' => 'Mulai Hafal'
            ],
            [
                'key'   => '3',
                'value' => 'Belum Hafal'
            ]
        ];
        $eskulChecked = [
            [
                'key'   => '1',
                'value' => 'A'
            ],
            [
                'key'   => '2',
                'value' => 'B'
            ],
            [
                'key'   => '3',
                'value' => 'C'
            ],
            [
                'key'   => '4',
                'value' => 'D'
            ]
        ];
        $perkembanganChecked = [
            [
                'key'   => '1',
                'value' => 'BB'
            ],
            [
                'key'   => '2',
                'value' => 'MB'
            ],
            [
                'key'   => '3',
                'value' => 'BSH'
            ],
            [
                'key'   => '4',
                'value' => 'BSB'
            ]
        ];
        return view('raport/raport_edit', [
            'eskuls'                => $eskul,
            'hafalans'              => $hafalan,
            'perkembangans'         => $perkembangan,
            'siswas'                => $siswa,
            'raportSiswas'          => $raportSiswa,
            'hafalanCheckeds'       => $hafalanChecked,
            'eskulCheckeds'         => $eskulChecked,
            'perkembanganCheckeds'  => $perkembanganChecked,
            ] );
    }
    public function updateDelete(Request $request){
        $idSiswa = $request->idSiswa;
        $idKelas = $request->idKelas;
        raport::where('siswa_id', $idSiswa)->delete();
        $this->prosesTambah($request);
        return redirect('raport/'.$idKelas)->with('status','Data berhasil diedit');
    }





    // RAPORT VIEW

    public function raportView($id){
        $siswa = DB::table('users')
        ->selectRaw('users.*, ( SELECT COUNT(*) FROM raports WHERE siswa_id = users.id ) AS raport_count')
        ->where('id',$id)
        ->get();

        return view( 'raport/raport_view', [
            'siswa' => $siswa
        ]);
    }

    public function raportViewDetail($idSiswa){

        $siswa = User::find($idSiswa);
        $raportSiswa = $siswa->raport;
        $eskul = Eskul::with('detail')->get();
        $hafalan = Hafalan::with('detail')->get();
        $perkembangan = perkembangan::with('detail')->get();

        $hafalanChecked = [
            [
                'key'   => '1',
                'value' => 'Sudah Hafal'
            ],
            [
                'key'   => '2',
                'value' => 'Mulai Hafal'
            ],
            [
                'key'   => '3',
                'value' => 'Belum Hafal'
            ]
        ];
        $eskulChecked = [
            [
                'key'   => '1',
                'value' => 'A'
            ],
            [
                'key'   => '2',
                'value' => 'B'
            ],
            [
                'key'   => '3',
                'value' => 'C'
            ],
            [
                'key'   => '4',
                'value' => 'D'
            ]
        ];
        $perkembanganChecked = [
            [
                'key'   => '1',
                'value' => 'BB'
            ],
            [
                'key'   => '2',
                'value' => 'MB'
            ],
            [
                'key'   => '3',
                'value' => 'BSH'
            ],
            [
                'key'   => '4',
                'value' => 'BSB'
            ]
        ];
        return view('raport/raport_detail', [
            'eskuls'                => $eskul,
            'hafalans'              => $hafalan,
            'perkembangans'         => $perkembangan,
            'siswas'                => $siswa,
            'raportSiswas'          => $raportSiswa,
            'hafalanCheckeds'       => $hafalanChecked,
            'eskulCheckeds'         => $eskulChecked,
            'perkembanganCheckeds'  => $perkembanganChecked,
            ] );
    }

    public function raportPDF($idSiswa){
        $siswa = User::find($idSiswa);
        $raportSiswa = $siswa->raport;
        $eskul = Eskul::with('detail')->get();
        $hafalan = Hafalan::with('detail')->get();
        $perkembangan = perkembangan::with('detail')->get();

        $hafalanChecked = [
            [
                'key'   => '1',
                'value' => 'Sudah Hafal'
            ],
            [
                'key'   => '2',
                'value' => 'Mulai Hafal'
            ],
            [
                'key'   => '3',
                'value' => 'Belum Hafal'
            ]
        ];
        $eskulChecked = [
            [
                'key'   => '1',
                'value' => 'A'
            ],
            [
                'key'   => '2',
                'value' => 'B'
            ],
            [
                'key'   => '3',
                'value' => 'C'
            ],
            [
                'key'   => '4',
                'value' => 'D'
            ]
        ];
        $perkembanganChecked = [
            [
                'key'   => '1',
                'value' => 'BB'
            ],
            [
                'key'   => '2',
                'value' => 'MB'
            ],
            [
                'key'   => '3',
                'value' => 'BSH'
            ],
            [
                'key'   => '4',
                'value' => 'BSB'
            ]
        ];

            $pdf = PDF::loadView('pdf/document', [
                'eskuls'                => $eskul,
                'hafalans'              => $hafalan,
                'perkembangans'         => $perkembangan,
                'siswas'                => $siswa,
                'raportSiswas'          => $raportSiswa,
                'hafalanCheckeds'       => $hafalanChecked,
                'eskulCheckeds'         => $eskulChecked,
                'perkembanganCheckeds'  => $perkembanganChecked,
                ]);
            return $pdf->stream('document.pdf');

        // return [
        //     'format'           => 'A4', // See https://mpdf.github.io/paging/page-size-orientation.html
        //     'author'           => 'John Doe',
        //     'subject'          => 'This Document will explain the whole universe.',
        //     'keywords'         => 'PDF, Laravel, Package, Peace', // Separate values with comma
        //     'creator'          => 'Laravel Pdf',
        //     'display_mode'     => 'fullpage'
        // ];
    }
}
