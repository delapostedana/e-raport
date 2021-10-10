@extends('layouts/main')

@section('tittle','Input Raport')

@section('page-tittle','Input Raport')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Input Raport</li>
@endsection


@section('content')
@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table user-table" id="table-datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Peserta Didik</th>
                                <th>Nilai</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $data->nama }}</td>
                                <td></td>
                                <td>
                                    <a href="perkembanganDetail/{{ $data->id }}" class="btn btn-primary text-white"><i class="mdi mdi-plus"></i> Input Raport</a>
                                    <a href="perkembangan/edit/{{ $data->id }}" class="btn btn-warning text-white"><i class="mdi mdi-pencil"></i> Edit</a>
                                    <a href="perkembangan/hapus/{{ $data->id }}" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="mdi mdi-delete"></i> Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
