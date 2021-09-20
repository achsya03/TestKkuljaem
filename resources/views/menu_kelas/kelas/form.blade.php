<div class="position-relative form-group">
    <input name="nama" id="nama" hidden placeholder="" class="form-control">
</div>
<div class="position-relative form-group">
    <label for="exampleEmail" class="">Judul Kelas</label>
    <input name="judul_kelas" id="judul_kelas" placeholder="" class="form-control">
</div>
<div class="position-relative form-group">
    <label for="exampleEmail" class="">Deskripsi Kelas</label>
    <textarea name="deskripsi" id="deskripsi" placeholder="" class="form-control"></textarea>
</div>
<div class="position-relative form-group">
    <label for="exampleSelectMulti" class="">Nama Mentor</label>
    <select multiple name="mentor[]" id="mentor" class="form-control"></select>
</div>
<div class="position-relative form-group">
    <label class="">Banner Kelas Web</label>
    <input name="url_web" id="url_web" type="file" class="form-control-file">
    <small class="form-text text-muted">Format. Jpg Ukuran Gambar 580 x 323px dengan maksimal file 2MB</small>
</div>
<div class="position-relative form-group">
    <label class="">Banner Kelas Mobile</label>
    <input name="url_mobile" id="url_mobile" type="file" class="form-control-file">
    <small class="form-text text-muted">Format. Jpg Ukuran Gambar 380 x 254 px dengan maksimal file 2MB</small>
</div>
<div class="position-relative form-check">
    <input type="checkbox" name="status" class="form-check-input" id="status_tersedia" value="1">
    <label class="form-check-label" for="status_tersedia">Publikasikan</label>
</div>