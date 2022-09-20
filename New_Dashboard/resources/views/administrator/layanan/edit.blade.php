<input type="hidden" name="id" value="{{ $edit->id }}">
@php
    $hapus = trim($edit->icon_lyn, url('/'));
    $layanan = substr($hapus, 8);
@endphp
<input type="hidden" name="oldImage" value="{{ $layanan }}">
<div class="form-group">
    <label for="deskripsi_lyn"> Nama Layanan </label> </label>
    <textarea class="form-control" id="nama_lyn" name="nama_lyn" rows="5" placeholder="Masukkan deskripsi_lyn Footer" value="{{ $edit->nama_lyn }}"> {{ $edit->nama_lyn }}</textarea>
</div>
<div class="form-group">
    <label for="deskripsi_lyn"> Deskripsi Layanan </label> </label>
    <textarea class="form-control" id="deskripsi_lyn" name="deskripsi_lyn" rows="5" placeholder="Masukkan deskripsi_lyn Footer" value="{{ $edit->deskripsi_lyn }}"> {{ $edit->deskripsi_lyn }}</textarea>
</div>
<div class="form-group">
    <input type="hidden" name="icon_lyn" value="{{ $layanan }}">
    <label for="foto"> Icon </label>
    @if ($edit->icon_lyn)
        <img src="{{ $edit->icon_lyn }}" class="img-fluid gambar-preview-new img-fluid mb-3 col-sm-5 d-block"
            id="tampilGambar">
    @else
        <img src="{{ url('/gambar/upload.jpg') }}" class="img-fluid gambar-preview-new" id="tampilGambar">
    @endif
    <input type="file" name="icon_lyn" class="form-control" id="icon_lyn_new" placeholder="Masukan Foto/Gambar" onchange="previewImageEdit()">
</div>


<script>
    function previewImageEdit() {
        const image = document.querySelector("#icon_lyn_new");
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
