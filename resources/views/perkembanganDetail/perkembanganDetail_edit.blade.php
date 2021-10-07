@extends('layouts/main')

@section('tittle','Edit Perkembangan Detail')

@section('page-tittle','Edit Perkembangan Detail')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Kategori Penilaian</a></li>
<li class="breadcrumb-item"><a href="{{ route('perkembangan') }}">Perkembangan</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit Perkembangan Detail</li>
@endsection


@section('content')
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card-body">
            <h3 class="mb-4" style="color: #54667a"><i class="mdi me-2 mdi-file"></i> Form Edit Perkembangan Detail</h3>
            @foreach ($perkembanganDetail as $data)
            <form method="post" action="{{ url('perkembanganDetail/update') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border border-info" value="{{ $data->nama }}" placeholder="Nama Perkembangan" name="nama"
                        required>
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <input type="hidden" name="perkembangan_id" value="{{ $data->perkembangan_id }}">
                    <label><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-trending-up feather-sm text-info fill-white me-2">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                            <polyline points="17 6 23 6 23 12"></polyline>
                        </svg><span class="border-start border-info ps-3">Nama Perkembangan Detail <span
                                class="text-danger">*</span></span></label>
                </div>

                <div class="d-md-flex align-items-center">
                    <div class="mt-3 mt-md-0 ms-auto">
                        <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
                            <div class="d-flex align-items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-send feather-sm fill-white me-2">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                                Submit
                            </div>
                        </button>
                    </div>
                </div>


            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
