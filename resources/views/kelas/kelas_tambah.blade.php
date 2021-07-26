@extends('layouts/main')

@section('tittle','Tambah Kelas')

@section('page-tittle','Tambah Kelas')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('kelas') }}">Kelas</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah Kelas</li>
@endsection


@section('content')
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card-body">
            <h3 class="mb-4" style="color: #54667a"><i class="mdi me-2 mdi-file"></i> Form Tambah kelas</h3>
            <form method="post" action="{{ url('kelas/proses') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border border-info" placeholder="Nama kelas" name="nama_kelas"
                        required>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast feather-sm text-info fill-white me-2"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>

                        <span class="border-start border-info ps-3">Nama kelas <span
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
        </div>
    </div>
</div>
@endsection
