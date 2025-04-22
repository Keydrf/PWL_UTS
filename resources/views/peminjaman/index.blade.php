<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman Buku</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Peminjaman Buku</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>ID Buku</th>
                    <th>ID Anggota</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peminjamans as $peminjaman)
                <tr>
                    <td>{{ $peminjaman->id }}</td>
                    <td>{{ $peminjaman->buku_id }}</td>
                    <td>{{ $peminjaman->anggota_id }}</td>
                    <td>{{ $peminjaman->tanggal_pinjam }}</td>
                    <td>{{ $peminjaman->tanggal_kembali }}</td>
                    <td><a href="{{ route('peminjaman.show', $peminjaman->peminjaman_id) }}">Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>