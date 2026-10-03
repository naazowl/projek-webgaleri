<h2>Data Foto</h2>
<a href="/admin/foto/create">Tambah Foto</a>
<br><br>

<table border="1">
    <tr>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    @foreach($fotos as $f)
    <tr>
        <td>{{ $f->judul }}</td>
        <td><img src="/uploads/foto/{{ $f->gambar }}" width="120"></td>
        <td><a href="/admin/foto/delete/{{ $f->id }}">Hapus</a></td>
    </tr>
    @endforeach
</table>
