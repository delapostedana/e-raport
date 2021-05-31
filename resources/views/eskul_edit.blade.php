<h1>Edit Eskul</h1>

@foreach ($eskul as $data)

<form method="post" action="{{ url('eskul/update') }}">
    @csrf
          <div class="form-group">
              <label for="nama">Nama Eskul:</label>
              <input type="hidden" name="id" value="{{ $data->id }}">
              <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" required>
          </div>
          <button type="submit">Simpan</button>
      </form>
@endforeach
