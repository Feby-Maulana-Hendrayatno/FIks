<input type="hidden" name="id" value="{{ $edit->id }}">
@php
$hapus = trim($edit->icon_footer, url('/'));
$footer = substr($hapus, 8);
@endphp
<input type="hidden" name="oldImage" value="{{ $footer }}">
<div class="form-group">
    <label for="Deskripsi"> Deskripsi</label> </label>
    <textarea class="form-control" id="deskripsi_footer" name="deskripsi_footer" rows="5"
        placeholder="Masukkan deskripsi Footer" value="{{ $edit->deskripsi_footer }}"> {{ $edit->deskripsi_footer }}</textarea>
</div>
<div class="form-group">
    <input type="hidden" name="icon_footer" value="{{ $footer }}">
    <label for="foto">Foto</label>
    @if ($edit->icon_footer)
        <img src="{{ $edit->icon_footer }}" class="img-fluid gambar-preview-new img-fluid mb-3 col-sm-5 d-block"
            id="tampilGambar">
    @else
        <img src="{{ url('/gambar/upload.jpg') }}" class="img-fluid gambar-preview-new" id="tampilGambar">
    @endif
    <input type="file" name="icon_footer_new" class="form-control" id="icon_footer_new" placeholder="Masukan Foto/Gambar"
        onchange="previewImageEdit()">
</div>

<script>
    function previewImageEdit() {
        const image = document.querySelector("#icon_footer_new");
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
