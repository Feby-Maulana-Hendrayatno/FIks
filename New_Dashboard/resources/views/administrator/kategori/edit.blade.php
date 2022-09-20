<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
    <label for="nama_kategori"> Nama Kategori</label>
    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Masukkan Nama Kategori"
        value="{{ $edit->nama_kategori }}">
</div>
