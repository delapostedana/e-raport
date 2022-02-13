@extends('layouts/main')

@section('tittle','Lihat Raport')

@section('page-tittle','Lihat Raport')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Lihat Raport</li>
@endsection


@section('content')
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $data->nama }}</td>
                                <td>
                                @if($data->raport_count > 0)
                                    <a href="{{ route('raport.view.detail',$data->id) }}" class="btn btn-primary text-white"><i class="mdi mdi-eye"></i> Lihat Raport</a>
                                @else
                                <span class="text-danger"><strong><i class="mdi mdi-minus-circle"></i> RAPORT BELUM DI INPUT</strong></span>
                                @endif

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
