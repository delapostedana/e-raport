<form method="post" action="{{ url('raport/proses') }}">
@csrf
<ul>
@foreach($eskuls as $eskul)
    <li>
    {{ $eskul->nama }}
        <ul>
            @foreach($eskul->detail as $detail)
                <ol>
                    {{ $detail->nama }}
                    <input type="text" name="eskul[{{ $detail->id }}]">
                </ol>
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
                    <input type="text" name="hafalan[{{ $detail->id }}]">
                </ol>
            @endforeach
        </ul>
    </li>
@endforeach

</ul>
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
</form>
