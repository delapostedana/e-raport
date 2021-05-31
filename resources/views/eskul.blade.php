<h1>Data Eskul</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<a href="{{ url('eskul/add') }}">Tambah</a>
<table border="1">
    <thead>
        <td>#</td>
        <td>Nama Eskul</td>
        <td>Action</td>
    </thead>
    <tbody>
        @foreach($eskul as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td> {{ $data->nama }}</td>
            <td>
                <a href="eskul/edit/{{$data->id}}">Edit</a> ||
                <a href="eskul/hapus/{{$data->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
