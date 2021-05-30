<table>
    <thead>
        <td>nama eskul</td>
    </thead>
    <tbody>
        @foreach($eskul as $data)
        <tr>
            <td> {{ $data->nama }}</td>
        </tr>
        @endforeach
    </tbody>
</table>