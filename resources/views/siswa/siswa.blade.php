@extends('layouts/main')

@section('tittle','Peserta Didik')

@section('page-tittle','Data Peserta Didik')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ 'dashboard' }}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Peserta Didik</li>
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
                <a href="{{ url('siswa/add') }}" class="btn btn-primary mb-4"><i class="mdi mdi-plus"></i> Tambah</a>
                <div class="table-responsive">
                    <table class="table user-table" id="table-datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Peserta Didik</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>No. Handphone</th>
                                <th>Kelas</th>
                                <th style="width: 400px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $data->nama }}</td>
                                <td> {{ $data->tempat_lahir }}</td>
                                <td> {{ $data->tanggal_lahir }}</td>
                                <td> {{ $data->alamat }}</td>
                                <td> {{ $data->nama_ayah }}</td>
                                <td> {{ $data->nama_ibu }}</td>
                                <td> {{ $data->no_hp }}</td>
                                <td> {{ $data->kelas->nama_kelas }}</td>
                                <td>
                                    <a href="siswa/edit/{{ $data->id }}" class="btn btn-warning text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil"></i> </a>
                                    <a href="siswa/hapus/{{ $data->id }}" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="mdi mdi-delete"></i></a>
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
