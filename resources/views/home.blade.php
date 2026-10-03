<!DOCTYPE html>
<html lang="id">
<head>
    <title>Galeri Sekolah</title>
    <style>
        body { background:#f4f6f9; margin:0; font-family:Arial; }
        header { background:#0056b3; padding:20px; color:white; }
        .grid {
            max-width:1100px; margin:30px auto;
            display:grid; gap:20px;
            grid-template-columns:repeat(auto-fill,minmax(250px,1fr));
        }
        .card {
            background:white; border-radius:10px; overflow:hidden;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }
        .card img { width:100%; height:180px; object-fit:cover; }
        .caption { padding:10px; }
    </style>
</head>
<body>

<header><h1>Galeri Sekolah</h1></header>

<div class="grid">
    @foreach($fotos as $foto)
    <div class="card">
        <img src="/uploads/foto/{{ $foto->gambar }}" alt="">
        <div class="caption">{{ $foto->judul }}</div>
    </div>
    @endforeach
</div>

</body>
</html>
