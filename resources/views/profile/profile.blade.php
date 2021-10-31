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
<div class="row">
    <!-- column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="mt-4">
                    <img src="../../assets/images/users/5.jpg" class="rounded-circle" width="150" />
                    <h4 class="card-title mt-2">Hanna Gover</h4>
                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                </center>
            </div>
            <div>
                <hr />
            </div>
            <div class="card-body">
                <small class="text-muted">Nomor Induk </small>
                <h6>12345</h6>
                <small class="text-muted">Kelas </small>
                <h6>1B</h6>
                <small class="text-muted pt-4 db">Nomor Handphone</small>
                <h6>+91 654 784 547</h6>
                <small class="text-muted pt-4 db">Alamat</small>
                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
        <div class="card-header bg-primary text-white text-center">
        SETTING
        </div>
            <div class="card-body">
                <form class="form-horizontal form-material">
                    <div class="mb-3">
                        <label class="col-md-12">Nama Lengkap</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Tempat Lahir</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Cilacap" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Tanggal Lahir</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="12 Agustus 1993" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Nama Ayah</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Bapak" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Nama Ibu</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Mamah" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Asal Sekolah</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="MI" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Lingkar Kepala</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="2 Meter Setengah" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="example-email" class="col-md-12">Nomor Induk</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email" disabled />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" value="password" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Nomor Handphone</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="123 456 7890" class="form-control form-control-line" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12">Alamat</label>
                        <div class="col-md-12">
                            <textarea rows="5" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <!-- <div class="mb-3">
                        <label class="col-sm-12">Select Country</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line">
                                <option>London</option>
                                <option>India</option>
                                <option>Usa</option>
                                <option>Canada</option>
                                <option>Thailand</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="mb-3">
                        <div class="col-sm-12">
                            <button class="btn btn-primary">
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
