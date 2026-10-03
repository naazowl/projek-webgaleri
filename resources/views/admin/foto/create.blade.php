<h2>Tambah Foto</h2>

<form method="POST" action="/admin/foto/store" enctype="multipart/form-data">
    @csrf
    <input type="text" name="judul" placeholder="Judul Foto"><br><br>
    <input type="file" name="gambar"><br><br>
    <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>
