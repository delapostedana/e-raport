<h1>eskul tambah</h1>
<form method="post" action="{{ url('proses') }}">
    @csrf
          <div class="form-group">
              <label for="nama">Nama Eskul:</label>
              <input type="text" class="form-control" name="nama" required>
          </div>
          <button type="submit">Simpan</button>
      </form>
