@extends('layouts/main')

@section('tittle','Dashboard')

@section('page-tittle','Dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
@endsection


@section('content')
  <?php
    if(Auth::user()->role_id == 1){
        echo "Dasboard Admin";
    }
    elseif(Auth::user()->role_id == 2){
        echo "Dasboard Guru";
    }
    else{
        echo "Dasboard Siswa";
    }
?>
@endsection
