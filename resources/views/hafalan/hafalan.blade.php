@extends('layouts/main')

@section('tittle','Hafalan')

@section('page-tittle','Data Hafalan')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Kategori Penilaian</a></li>
<li class="breadcrumb-item active" aria-current="page">Hafalan</li>
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
                <a href="{{ url('hafalan/add') }}" class="btn btn-primary mb-4"><i class="mdi mdi-plus"></i> Tambah</a>
                <div class="table-responsive">
                    <table class="table user-table" id="table-datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama hafalan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hafalan as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $data->nama }}</td>
                                <td>
                                    <a href="hafalanDetail/{{ $data->id }}" class="btn btn-success text-white"><i class="mdi mdi-plus"></i> Hafalan Detail</a>
                                    <a href="hafalan/edit/{{ $data->id }}" class="btn btn-warning text-white"><i class="mdi mdi-pencil"></i> Edit</a>
                                    <a href="hafalan/hapus/{{ $data->id }}" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="mdi mdi-delete"></i> Hapus</a>
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
