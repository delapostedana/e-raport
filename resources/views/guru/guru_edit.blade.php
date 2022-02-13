@extends('layouts/main')

@section('tittle','Edit Guru')

@section('page-tittle','Edit Guru')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('guru') }}">Guru</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit Guru</li>
@endsection


@section('content')
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card-body">
            <h3 class="mb-4" style="color: #54667a"><i class="mdi me-2 mdi-file"></i> Form Edit Guru</h3>
            @foreach ($guru as $data)
            <form method="post" action="{{ url('guru/update') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" value="{{ $data->nomor_induk }}" class="form-control border border-info"
                        disabled>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>

                        <span class="border-start border-info ps-3">Nomor Induk <span
                                class="text-danger">*</span></span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" value="{{ $data->nama }}" class="form-control border border-info" placeholder="Nama guru" name="nama"
                        required>
                        <input type="hidden" name="id" value="{{ $data->id }}">
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>

                        <span class="border-start border-info ps-3">Nama Guru <span
                                class="text-danger">*</span></span></label>
                </div>
                {{-- <div class="form-floating mb-3">
                    <input type="text" class="form-control border border-info" placeholder="Email guru" name="email"
                        required value="{{ $data->email }}">
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>

                        <span class="border-start border-info ps-3">Email Guru <span
                                class="text-danger">*</span></span></label>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                </div> --}}
                <div class="form-floating mb-3">
                        <textarea name="alamat" id="" cols="30" rows="5" class="form-control border border-info" placeholder="Alamat" required >{{ $data->alamat }}</textarea>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather-sm text-info fill-white me-2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>

                        <span class="border-start border-info ps-3">Alamat <span
                                class="text-danger">*</span></span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control border border-info" placeholder="Nomor handphone" name="no_hp"
                        required value="{{ $data->no_hp }}">
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
                        @foreach ($kelas_id as $klas)
                            <option value="{{ $klas->id }}" @php
                                if ($data->kelas_id == $klas->id) {
                                    echo "selected";
                                }
                            @endphp >{{ $klas->nama_kelas }}</option>
                        @endforeach
                    </select>
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast feather-sm text-info fill-white me-2"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>

                        <span class="border-start border-info ps-3">Kelas <span
                                class="text-danger">*</span></span></label>
                </div>

                <!-- <div class="form-floating mb-3">
                    <input type="text" class="form-control border border-info" placeholder="Wali kelas" name="kelas"
                        required value="{{ $data->kelas_id }}">
                    <label>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast feather-sm text-info fill-white me-2"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>

                        <span class="border-start border-info ps-3">Wali kelas <span
                                class="text-danger">*</span></span></label>
                </div> -->

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
