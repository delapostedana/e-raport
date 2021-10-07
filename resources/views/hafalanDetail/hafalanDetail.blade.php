@extends('layouts/main')

@section('tittle','Hafalan Detail')

@section('page-tittle','Data Hafalan Detail')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Kategori Penilaian</a></li>
<li class="breadcrumb-item"><a href="{{ route('hafalan') }}">Hafalan</a></li>
<li class="breadcrumb-item active" aria-current="page">Hafalan Detail</li>
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
                <a href="add/{{ $idHafalan }}" class="btn btn-primary mb-4"><i class="mdi mdi-plus"></i> Tambah</a>
                <div class="table-responsive">
                    <table class="table user-table" id="table-datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Hafalan Detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hafalanDetail as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $data->nama }}</td>
                                <td>
                                    <a href="edit/{{ $data->id }}" class="btn btn-warning text-white"><i class="mdi mdi-pencil"></i> Edit</a>
                                    <a href="hapus/{{ $data->id }}/{{$data->hafalan_id}}" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="mdi mdi-delete"></i> Hapus</a>
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
