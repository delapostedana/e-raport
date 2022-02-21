<html>
<head>
<title>E-Raport</title>
<style>
    @page {
	header: page-header;
}
</style>
</head>
<body>
<htmlpageheader name="page-header">
	<div>
        <?php
            date_default_timezone_set('Asia/Jakarta');
        ?>
        <p style="color: gray; text-align:right">E-Raport - {{ now() }}</p>
    </div>
</htmlpageheader>
    <div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card-body bg-white">
            <h3 class="mb-4" style="color: #54667a; text-align:center"><i class="mdi me-2 mdi-file"></i> E-Raport</h3>

            <table class="mb-2 bg-primary">

                <tr>
                    <td>Nama Peserta Didik</td>
                    <td class="pr-2 pl-2">:</td>
                    <td><strong>{{$siswas->nama}}</strong></td>
                </tr>
                <tr>
                    <td>Nomor Induk</td>
                    <td class="pr-2 pl-2">:</td>
                    <td>{{$siswas->nomor_induk}}</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td class="pr-2 pl-2">:</td>
                    <td>{{$siswas->kelas->nama_kelas}}</td>
                </tr>

            </table>

            <form action="">
                @csrf
                <div class="bg-success text-white text-center py-2 mb-2">
                    <h5>I. ESKUL</h5>
                </div>
                <div style="width: 900px;" class="container form-floating mb-3">
                    <ul>
                        @foreach($eskuls as $eskul)
                        <li>
                            <div class="pb-1">
                                <b>{{ $eskul->nama }}</b>
                            </div>
                            <table class="table table-striped">
                                <tbody>
                                    @foreach($eskul->detail as $detail)
                                    <?php
                                        $raportEskul = $raportSiswas->where('raportable_id', $detail->id)->where('raportable_type','App\EskulDetail')->first();
                                    ?>
                                    <tr>
                                        <td style="width: 30px;">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td style="width: 300px;" class="text-left">
                                            {{ $detail->nama }}
                                        </td>
                                        <td class="text-right <?php if ($raportEskul['nilai']=='D') {
                                            echo 'text-danger';
                                            }
                                            else{
                                                echo "text-secondary";
                                            }
                                            ?>">
                                            <b>{{ $raportEskul['nilai'] }}</b>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-success text-white text-center py-2 mb-2">
                    <h5>II. HAFALAN</h5>
                </div>
                <div style="width: 900px;" class="container form-floating mb-3">
                    <ul>
                        @foreach($hafalans as $hafalan)
                        <li>
                            <div class="pb-1">
                                <b>{{ $hafalan->nama }}</b>
                            </div>
                            <!-- <div class="row"> -->
                            <table class="table table-striped">
                                <tbody>
                                    @foreach($hafalan->detail as $detail)
                                    <?php
                                        $raportHafalan = $raportSiswas->where('raportable_id', $detail->id)->where('raportable_type','App\Hafalan_detail')->first();
                                    ?>
                                    <tr>
                                        <td style="width: 30px;">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-left" style="width: 300px;">
                                            {{ $detail->nama }}
                                        </td>
                                        <td class="text-right <?php if ($raportHafalan['nilai']=='Belum Hafal') {
                                            echo 'text-danger';
                                            }
                                            else{
                                                echo "text-secondary";
                                            }
                                            ?>">
                                           <b> {{ $raportHafalan['nilai'] }} </b>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-success text-white text-center py-2 mb-2">
                    <h5>III. PERKEMBANGAN</h5>
                </div>
                <div class="container form-floating mb-3" style="width: 900px;">
                    <ul>
                        @foreach($perkembangans as $perkembangan)
                        <li>
                            <div class="pb-1">
                                <b>{{ $perkembangan->nama }}</b>
                            </div>
                            <table class="table table-striped">
                                <tbody>
                                    @foreach($perkembangan->detail as $detail)
                                    <?php
                                        $raportPerkembangan = $raportSiswas->where('raportable_id', $detail->id)->where('raportable_type','App\Perkembangan_detail')->first();
                                    ?>
                                    <tr>
                                        <td style="width: 30px;">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-left" style="width: 500px;">
                                            {{ $detail->nama }}
                                        </td>
                                        <td class="text-right <?php if ($raportPerkembangan['nilai']=='BB') {
                                            echo 'text-danger';
                                            }
                                            else{
                                                echo "text-secondary";
                                            }
                                            ?>"><b>
                                            @if ($raportPerkembangan['nilai']=='BB')
                                                Belum Berkembang
                                            @elseif ($raportPerkembangan['nilai']=='MB')
                                                Mulai Berkembang
                                            @elseif ($raportPerkembangan['nilai']=='BSH')
                                                Berkembang Sesuai Harapan
                                            @elseif ($raportPerkembangan['nilai']=='BSB')
                                                Berkembang Sangat Baik
                                            @endif
                                            </b>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
