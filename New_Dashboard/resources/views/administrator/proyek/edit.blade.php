<input type="hidden" name="id" value="{{ $edit->id }}">
@php
    $hapus = trim($edit->foto_proyek, url('/'));
    $proyek = substr($hapus, 8);
@endphp
<input type="hidden" name="oldImage" value="{{ $proyek }}">
<div class="form-group">
    <label for="Deskripsi"> Nama Produk </label> </label>
    <textarea class="form-control" id="nm_proyek" name="nm_proyek" rows="5" placeholder="Masukkan deskripsi Nama Produk" value="{{ $edit->nm_proyek }}"> {{ $edit->nm_proyek }}</textarea>
</div>
<div class="form-group">
    <label for="id"> Device </label>
    <select required class="form-control" style="width: 100%;" name="device">
        @foreach($data_kategori as $kategori)
        <option value="{{ $kategori->nama_kategori }}" {{ $kategori->nama_kategori == $edit->device ? 'selected' : '' }}>
            {{ $kategori->nama_kategori }}
        </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <input type="hidden" name="foto_proyek" value="{{ $proyek }}">
    <label for="foto">Foto</label>
    @if ($edit->foto_proyek)
        <img src="{{ $edit->foto_proyek }}" class="img-fluid gambar-preview-new img-fluid mb-3 col-sm-5 d-block"
            id="tampilGambar">
    @else
        <img src="{{ url('/gambar/upload.jpg') }}" class="img-fluid gambar-preview-new" id="tampilGambar">
    @endif
    <input type="file" name="new_foto_proyek" class="form-control" id="new_foto_proyek" placeholder="Masukan Foto/Gambar" onchange="previewImageEdit()">
</div>

<script>
    function previewImageEdit() {
        const image = document.querySelector("#new_foto_proyek");
        const imgPreview = document.querySelector(".gambar-preview-new");

        imgPreview.style.display = "block";

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            $("#tampilGambar").addClass('mb-3');
            $("#tampilGambar").height("250");
        }
    }
</script>
