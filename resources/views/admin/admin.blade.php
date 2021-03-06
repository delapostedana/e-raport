@extends('layouts/main')

@section('tittle','Admin')

@section('page-tittle','Data Admin')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Admin</li>
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
            @if (auth()->user()->role_id == 1)
                <a href="{{ url('admin/add') }}" class="btn btn-primary mb-4"><i class="mdi mdi-plus"></i> Tambah</a>
            @endif
                <div class="table-responsive">
                    <table class="table user-table" id="table-datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No Induk</th>
                                <th>Nama Admin</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                @if (auth()->user()->role_id == 1)
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admin as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $data->nomor_induk }}</td>
                                <td> {{ $data->nama }}</td>
                                <td> {{ $data->email }}</td>
                                <td> {{ $data->alamat }}</td>
                                <td> {{ $data->no_hp }}</td>
                                @if (auth()->user()->role_id == 1)
                                    <td>
                                        <a href="siswa/edit/{{ $data->id }}" class="btn btn-success text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><i class="mdi mdi-eye"></i> </a>
                                        <a href="admin/edit/{{ $data->id }}" class="btn btn-warning text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil"></i> </a>
                                        <a href="admin/hapus/{{ $data->id }}" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="mdi mdi-delete"></i></a>
                                    </td>
                                @endif
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
