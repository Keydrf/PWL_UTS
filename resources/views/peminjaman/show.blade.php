<!DOCTYPE html>
<html>
<head>
    <title>Detail Peminjaman Buku</title>
    <style>
        .container {
            width: 50%;
            margin: 20px auto;
        }
        h2 {
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Peminjaman Buku</h2>
        <p><strong>ID Peminjaman:</strong> {{ $peminjaman->id }}</p>
        <p><strong>ID Buku:</strong> {{ $peminjaman->buku_id }}</p>
        <p><strong>Judul Buku:</strong> {{ $peminjaman->buku->judul ?? 'Data Buku Tidak Ditemukan' }}</p>
        <p><strong>ID Anggota:</strong> {{ $peminjaman->anggota_id }}</p>
        <p><strong>Nama Anggota:</strong> {{ $peminjaman->anggota->nama ?? 'Data Anggota Tidak Ditemukan' }}</p>
        <p><strong>Tanggal Pinjam:</strong> {{ $peminjaman->tanggal_pinjam }}</p>
        <p><strong>Tanggal Kembali:</strong> {{ $peminjaman->tanggal_kembali }}</p>

        <a href="{{ url('/peminjaman') }}">← Kembali</a>
    </div>
</body>
</html>