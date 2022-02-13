@extends('layouts/main')

@section('tittle','Profile')

@section('page-tittle','Profile')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Profile</li>
@endsection


@section('content')
@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <!-- column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="mt-4">
                    <img src="{{ asset('/assets/images/users/') }}/{{ Auth::user()->foto }}" class="rounded-circle" width="150" />
                    <h4 class="card-title mt-2">{{ Auth::user()->nama }}</h4>
                    <h6 class="card-subtitle">
                    <?php
                    if(Auth::user()->role_id==1){
                        echo "Admin";
                    }
                    elseif(Auth::user()->role_id==2){
                        echo "Guru";
                    }
                    elseif(Auth::user()->role_id==3){
                        echo "Siswa";
                    }
                    else{}
                    ?></h6>
                </center>
            </div>
            <div>
                <hr />
            </div>
            <div class="card-body">
                <small class="text-muted">Nomor Induk </small>
                <h6>{{ Auth::user()->nomor_induk }}</h6>
                <?php
                    if( Auth::user()->kelas==null){
                        echo '';
                    }
                    else{
                        echo '<small class="text-muted">Kelas </small>';
                        echo '<h6>'.Auth::user()->kelas->nama_kelas.'</h6>';
                    }
                ?>
                <small class="text-muted pt-4 db">Nomor Handphone</small>
                <h6>{{ Auth::user()->no_hp }}</h6>
                <small class="text-muted pt-4 db">Alamat</small>
                <h6>{{ Auth::user()->alamat }}</h6>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
        <div class="card-header bg-primary text-white text-center">
        SETTING
        </div>
            <div class="card-body">
                <form class="form-horizontal form-material" method="post" action="{{ url('profile/update') }}" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label class="col-md-12">Nama Lengkap</label>
                        <div class="col-md-12">
                            <input type="text" name="nama" value="{{ Auth::user()->nama }}" class="form-control form-control-line" />
                             <input type="hidden" name="id" value="{{ Auth::user()->id }}" class="form-control form-control-line" />
                        </div>
                    </div>
                    <?php
                        if(Auth::user()->role_id == 3){ ?>

                    <div class="mb-3">
                        <label class="col-md-12">Tempat Lahir</label>
                        <div class="col-md-12">
                            <input type="text" name="tempat_lahir" value="{{ Auth::user()->tempat_lahir }}" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Tanggal Lahir</label>
                        <div class="col-md-12">
                            <input type="date" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Nama Ayah</label>
                        <div class="col-md-12">
                            <input type="text" name="nama_ayah" value="{{ Auth::user()->nama_ayah }}" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Nama Ibu</label>
                        <div class="col-md-12">
                            <input type="text" name="nama_ibu" value="{{ Auth::user()->nama_ibu }}" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Asal Sekolah</label>
                        <div class="col-md-12">
                            <input type="text" name="asal_sekolah" value="{{ Auth::user()->asal_sekolah }}" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Lingkar Kepala (cm)</label>
                        <div class="col-md-12">
                            <input type="text" name="lingkar_kepala" value="{{ Auth::user()->lingkar_kepala }} " class="form-control form-control-line" />
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="mb-3">
                        <label for="example-email" class="col-md-12">Nomor Induk</label>
                        <div class="col-md-12">
                            <input type="text" value="{{ Auth::user()->nomor_induk }}" class="form-control form-control-line" name="example-email" id="example-email" disabled />
                        </div>
                    </div>
                      <div class="mb-3">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="text" value="{{ Auth::user()->email }}" class="form-control form-control-line" name="example-email" id="example-email" disabled />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Ubah Password</label>
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control form-control-line" />
                        </div>
                    </div>
                      <div class="mb-3">
                        <label class="col-md-12">Ubah Foto</label>
                        <div class="col-md-12">
                            <input type="file" name="foto" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Nomor Handphone</label>
                        <div class="col-md-12">
                            <input type="text" name="no_hp" value="{{ Auth::user()->no_hp }}" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Alamat</label>
                        <div class="col-md-12">
                            <textarea rows="5" name="alamat" class="form-control form-control-line">{{ Auth::user()->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
