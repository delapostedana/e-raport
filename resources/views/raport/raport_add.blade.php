@extends('layouts/main')

@section('tittle','Input Raport')

@section('page-tittle','Input Raport')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Input Raport</li>
@endsection


@section('content')
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card-body bg-white">
            <h3 class="mb-4" style="color: #54667a"><i class="mdi me-2 mdi-file"></i> Form Input Raport</h3>
            <table class="mb-2">
                @foreach($siswas as $siswa)
                <tr>
                    <td>Nama Peserta Didik</td>
                    <td class="pr-2 pl-2">:</td>
                    <td><strong>{{$siswa->nama}}</strong></td>
                </tr>
                <tr>
                    <td>Nomor Induk</td>
                    <td class="pr-2 pl-2">:</td>
                    <td>{{$siswa->nomor_induk}}</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td class="pr-2 pl-2">:</td>
                    <td>{{$siswa->kelas->nama_kelas}}</td>
                </tr>
                @endforeach
            </table>
            <form method="post" action="{{ url('raport/proses') }}">
                @csrf
                <div class="bg-success text-white text-center py-2 mb-2">
                    <h5>I. ESKUL</h5>
                </div>
                <div class="container form-floating mb-3">
                    <ul>
                        @foreach($eskuls as $eskul)
                        <li>
                            <div class="pb-1">
                                <b>{{ $eskul->nama }}</b>
                            </div>
                            <!-- <div class="row"> -->
                            <table class="table table-striped">
                                <tbody>
                                    @foreach($eskul->detail as $detail)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td style="width: 300px;">
                                            {{ $detail->nama }}
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="eskul[{{ $detail->id }}]" id="eskul[{{ $detail->id }}]1" value="A" required>
                                                <label class="form-check-label" for="eskul[{{ $detail->id }}]1">A</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="eskul[{{ $detail->id }}]" id="eskul[{{ $detail->id }}]2" value="B" required>
                                                <label class="form-check-label" for="eskul[{{ $detail->id }}]2">B</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="eskul[{{ $detail->id }}]" id="eskul[{{ $detail->id }}]3" value="C" required>
                                                <label class="form-check-label" for="eskul[{{ $detail->id }}]3">C</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="eskul[{{ $detail->id }}]" id="eskul[{{ $detail->id }}]4" value="D" required>
                                                <label class="form-check-label" for="eskul[{{ $detail->id }}]4">D</label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-success text-white text-center py-2 mb-2">
                    <h5>II. HAFALAN</h5>
                </div>
                <div class="container form-floating mb-3">
                    <ul>
                        @foreach($hafalans as $hafalan)
                        <li>
                            <div class="pb-1">
                                <b>{{ $hafalan->nama }}</b>
                            </div>
                            <!-- <div class="row"> -->
                            <table class="table table-striped">
                                <tbody>
                                    @foreach($hafalan->detail as $detail)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td style="width: 300px;">
                                            {{ $detail->nama }}
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hafalan[{{ $detail->id }}]" id="hafalan[{{ $detail->id }}]1" value="Sudah Hafal" required>
                                                <label class="form-check-label" for="hafalan[{{ $detail->id }}]1">Sudah Hafal</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hafalan[{{ $detail->id }}]" id="hafalan[{{ $detail->id }}]2" value="Mulai Hafal" required>
                                                <label class="form-check-label" for="hafalan[{{ $detail->id }}]2">Mulai Hafal</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hafalan[{{ $detail->id }}]" id="hafalan[{{ $detail->id }}]3" value="Belum Hafal" required>
                                                <label class="form-check-label" for="hafalan[{{ $detail->id }}]3">Belum Hafal</label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-success text-white text-center py-2 mb-2">
                    <h5>III. PERKEMBANGAN</h5>
                </div>
                <div class="container form-floating mb-3">
                    <div class="alert alert-info" role="alert">
                        <table class="mb-2">
                            <span class="text-underline"><i class="fa fa-info-circle"></i> <b>KETERANGAN</b></span>
                            <tr>
                                <td><b>BB</b></td>
                                <td class="pr-2 pl-2">:</td>
                                <td>Belum Berkembang</td>
                            </tr>
                            <tr>
                                <td><b>MB</b></td>
                                <td class="pr-2 pl-2">:</td>
                                <td>Mulai Berkembang</td>
                            </tr>
                            <tr>
                                <td><b>BSH</b></td>
                                <td class="pr-2 pl-2">:</td>
                                <td>Berkembang Sesuai Harapan</td>
                            </tr>
                            <tr>
                                <td><b>BSB</b></td>
                                <td class="pr-2 pl-2">:</td>
                                <td>Berkembang Sangat Baik</td>
                            </tr>
                        </table>
                    </div>
                    <ul>
                        @foreach($perkembangans as $perkembangan)
                        <li>
                            <div class="pb-1">
                                <b>{{ $perkembangan->nama }}</b>
                            </div>
                            <!-- <div class="row"> -->
                            <table class="table table-striped">
                                <tbody>
                                    @foreach($perkembangan->detail as $detail)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td style="width: 500px;">
                                            {{ $detail->nama }}
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="perkembangan[{{ $detail->id }}]" id="perkembangan[{{ $detail->id }}]1" value="BB" required>
                                                <label class="form-check-label" for="perkembangan[{{ $detail->id }}]1">BB</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="perkembangan[{{ $detail->id }}]" id="perkembangan[{{ $detail->id }}]2" value="MB" required>
                                                <label class="form-check-label" for="perkembangan[{{ $detail->id }}]2">MB</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="perkembangan[{{ $detail->id }}]" id="perkembangan[{{ $detail->id }}]3" value="BSH" required>
                                                <label class="form-check-label" for="perkembangan[{{ $detail->id }}]3">BSH</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="perkembangan[{{ $detail->id }}]" id="perkembangan[{{ $detail->id }}]4" value="BSB" required>
                                                <label class="form-check-label" for="perkembangan[{{ $detail->id }}]4">BSB</label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <input type="hidden" name="idSiswa" value="{{ $siswas[0]['id'] }}">
                <input type="hidden" name="idDosen" value="{{ Auth::user()->id }}">
                <input type="hidden" name="idKelas" value="{{ Auth::user()->kelas_id }}">

                <div class="d-md-flex align-items-center">
                    <div class="mt-3 mt-md-0 ms-auto">
                        <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
                            <div class="d-flex align-items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send feather-sm fill-white me-2">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                                Submit
                            </div>
                        </button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection
