@extends('layouts/main')

@section('tittle','Tambah Peserta Didik')

@section('page-tittle','Tambah Peserta Didik')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('siswa') }}">Peserta Didik</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah Peserta Didik</li>
@endsection


@section('content')
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card-body">
            <h3 class="mb-4" style="color: #54667a"><i class="mdi me-2 mdi-file"></i> Form Tambah Peserta Didik</h3>
            <form method="post" action="{{ url('siswa/proses') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border border-info" placeholder="Nama peserta didik" name="nama"
                        required>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>

                        <span class="border-start border-info ps-3">Nama Peserta Didik <span
                                class="text-danger">*</span></span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border border-info" placeholder="Tempat lahir" name="tempat_lahir"
                        required>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                            <line x1="8" y1="2" x2="8" y2="18"></line>
                            <line x1="16" y1="6" x2="16" y2="22"></line>
                        </svg>

                        <span class="border-start border-info ps-3">Tempat Lahir <span
                                class="text-danger">*</span></span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control border border-info" placeholder="Tanggal lahir" name="tanggal_lahir"
                        required>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>

                        <span class="border-start border-info ps-3">Tanggal Lahir <span
                                class="text-danger">*</span></span></label>
                </div>
                <div class="form-floating mb-3">
                        <textarea name="alamat" id="" cols="30" rows="5" class="form-control border border-info" placeholder="Alamat" required></textarea>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>

                        <span class="border-start border-info ps-3">Alamat <span
                                class="text-danger">*</span></span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border border-info" placeholder="Nama ayah" name="nama_ayah"
                        required>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="border-start border-info ps-3">Nama Ayah <span
                                class="text-danger">*</span></span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border border-info" placeholder="Nama ibu" name="nama_ibu"
                        required>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="border-start border-info ps-3">Nama Ibu <span
                                class="text-danger">*</span></span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control border border-info" placeholder="Nomor handphone" name="no_hp"
                        required>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>

                        <span class="border-start border-info ps-3">No. Handphone <span
                                class="text-danger">*</span></span></label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-control border border-info" name="kelas" id="kelas" required>
                        <option value="">-PILIH-</option>
                        @foreach ($kelas as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                        @endforeach
                    </select>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast feather-sm text-info fill-white me-2"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>

                        <span class="border-start border-info ps-3">Kelas <span
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
