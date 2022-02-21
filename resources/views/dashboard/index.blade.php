@extends('layouts/main')

@section('tittle','Dashboard')

@section('page-tittle','Dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
@endsection


@section('content')
<?php
    if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){ ?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="card small-box bg-primary text-center">
            <div class="inner p-3">
                <h1 class="text-white" style="font-size:50pt"> {{ $data[0]["admin"] }}</h1>
                <h6 class="card-subtitle text-white mt-3 mb-0">Total Admin</h6>
            </div>
            <a href="/admin" class="card-footer text-white">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="card small-box bg-info text-center">
            <div class="inner p-3">
                <h1 class="text-white" style="font-size:50pt"> {{ $data[0]["guru"] }}</h1>
                <h6 class="card-subtitle text-white mt-3 mb-0">Total Guru</h6>
            </div>
            <a href="/guru" class="card-footer text-white">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="card small-box bg-warning text-center">
            <div class="inner p-3">
                <h1 class="text-white" style="font-size:50pt"> {{ $data[0]["siswa"] }}</h1>
                <h6 class="card-subtitle text-white mt-3 mb-0">Total Siswa</h6>
            </div>
            <a href="/siswa" class="card-footer text-white">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="card small-box bg-danger text-center">
            <div class="inner p-3">
                <h1 class="text-white" style="font-size:50pt"> {{ $data[0]["kelas"] }}</h1>
                <h6 class="card-subtitle text-white mt-3 mb-0">Total Kelas</h6>
            </div>
            <a href="/kelas" class="card-footer text-white">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-7 col-sm-offset-3 text-center">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Kategori Penilaian</h3>
                <div id="pie-chart" style="min-height: 250px;"></div>
            </div>
            <div>
                <hr class="mt-0 mb-0">
            </div>
            <div class="card-body text-center ">
                <ul class="list-inline d-flex justify-content-center align-items-center mb-0">
                    <li class="me-4">
                        <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i>Eskul:
                            {{ $data[0]["eskul"] }}</h6>
                    </li>
                    <li class="me-4">
                        <h6 class=" text-info"><i class="fa fa-circle font-10 me-2"></i>Hafalan:
                            {{ $data[0]["hafalan"] }}</h6>
                    </li>
                    <li class="me-4">
                        <h6 class=" text-info"><i class="fa fa-circle font-10 me-2"></i>Perkembangan:
                            {{ $data[0]["perkembangan"] }}</h6>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="card">
            <div class="card-body">
                <center class="mt-4">
                    <img src="{{ asset('/assets/images/users/') }}/{{ Auth::user()->foto }}"
                        class="rounded-circle" width="150" />
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
</div>
<script>
    Morris.Donut({
        element: 'pie-chart',
        data: [{
                label: "Eskul",
                value: <?= $data[0]["eskul"] ?>
            },
            {
                label: "Hafalan",
                value: <?= $data[0]["hafalan"] ?>
            },
            {
                label: "Perkembangan",
                value: <?= $data[0]["perkembangan"] ?>
            }
        ]
    });

</script>

<?php
    }
    else{ ?>
<div class="row">
    <div class="col-7 col-sm-offset-3 text-center">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Kategori Penilaian</h3>
                <div id="pie-chart" style="min-height: 250px;"></div>
            </div>
            <div>
                <hr class="mt-0 mb-0">
            </div>
            <div class="card-body text-center ">
                <ul class="list-inline d-flex justify-content-center align-items-center mb-0">
                    <li class="me-4">
                        <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i>Eskul:
                            {{ $data[0]["eskul"] }}</h6>
                    </li>
                    <li class="me-4">
                        <h6 class=" text-info"><i class="fa fa-circle font-10 me-2"></i>Hafalan:
                            {{ $data[0]["hafalan"] }}</h6>
                    </li>
                    <li class="me-4">
                        <h6 class=" text-info"><i class="fa fa-circle font-10 me-2"></i>Perkembangan:
                            {{ $data[0]["perkembangan"] }}</h6>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="card">
            <div class="card-body">
                <center class="mt-4">
                    <img src="{{ asset('/assets/images/users/') }}/{{ Auth::user()->foto }}"
                        class="rounded-circle" width="150" />
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
</div>
<script>
    Morris.Donut({
        element: 'pie-chart',
        data: [{
                label: "Eskul",
                value: <?= $data[0]["eskul"] ?>
            },
            {
                label: "Hafalan",
                value: <?= $data[0]["hafalan"] ?>
            },
            {
                label: "Perkembangan",
                value: <?= $data[0]["perkembangan"] ?>
            }
        ]
    });

</script>
<?php
}
?>
@endsection
