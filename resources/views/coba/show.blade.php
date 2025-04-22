<!DOCTYPE html>
<html>
<head>
    <title>Detail Pelanggan</title>
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
        <h2>Detail Pelanggan</h2>
        <p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
        <p><strong>Email:</strong> {{ $pelanggan->email }}</p>
        <p><strong>No HP:</strong> {{ $pelanggan->no_hp }}</p>
        <p><strong>Alamat:</strong> {{ $pelanggan->alamat }}</p>

        <a href="{{ url('/pelanggan') }}">← Kembali</a>
    </div>
</body>
</html>
