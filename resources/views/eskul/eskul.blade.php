@extends('layouts/main')

@section('tittle','Eskul')

@section('page-tittle','Data Eskul')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Kategori Penilaian</a></li>
<li class="breadcrumb-item active" aria-current="page">Eskul</li>
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
                <a href="{{ url('eskul/add') }}" class="btn btn-primary mb-4"><i class="mdi mdi-plus"></i> Tambah</a>
            @endif
                <div class="table-responsive">
                    <table class="table user-table" id="table-datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Eskul</th>
                                @if (auth()->user()->role_id == 1)
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eskul as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $data->nama }}</td>
                                @if (auth()->user()->role_id == 1)
                                    <td>
                                        <a href="eskulDetail/{{ $data->id }}" class="btn btn-success text-white"><i class="mdi mdi-plus"></i> Eskul Detail</a>
                                        <a href="eskul/edit/{{ $data->id }}" class="btn btn-warning text-white"><i class="mdi mdi-pencil"></i> Edit</a>
                                        <a href="eskul/hapus/{{ $data->id }}" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="mdi mdi-delete"></i> Hapus</a>
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
