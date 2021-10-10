@extends('layouts/main')

@section('tittle','Input Raport')

@section('page-tittle','Input Raport')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Input Raport</li>
@endsection


@section('content')
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card-body bg-white">
            <h3 class="mb-4" style="color: #54667a"><i class="mdi me-2 mdi-file"></i> Form Input Raport</h3>
            <form method="post" action="{{ url('raport/proses') }}">
                @csrf

                <div class="form-floating mb-3">
                <ol>
                    @foreach($eskuls as $eskul)
                        <li>
                        {{ $eskul->nama }}
                            <ul>
                                @foreach($eskul->detail as $detail)
                                    <li>
                                        {{ $detail->nama }}
                                        <input type="text" class="form-control border-info" placeholder="Masukkan nilai {{ $detail->nama }}" name="eskul[{{ $detail->id }}]">
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach

                    @foreach($hafalans as $hafalan)
                        <li>
                        {{ $hafalan->nama }}
                            <ul>
                                @foreach($hafalan->detail as $detail)
                                    <ol>
                                        {{ $detail->nama }}
                                        <input type="text" class="form-control border border-info" name="hafalan[{{ $detail->id }}]">
                                    </ol>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach

                    </ol>
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



<!-- <form method="post" action="{{ url('raport/proses') }}">
@csrf

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
</form> -->
