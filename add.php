<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kuliner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: #fff;
        }
        .brand-header {
            text-align: center;
            margin-bottom: 40px;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        .brand-header h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .brand-header p {
            font-size: 1.2rem;
            margin-top: -10px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            background: #ffffff;
        }
        .form-label {
            font-weight: bold;
            color: #333;
        }
        .btn-primary {
            background: linear-gradient(45deg, #0056b3, #3399ff);
            border: none;
            transition: all 0.3s ease;
            color: #fff;
        }
        .btn-primary:hover {
            background: linear-gradient(45deg, #3399ff, #0056b3);
            transform: scale(1.05);
        }
        .text-center {
            color: #0056b3;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="brand-header">
    <h1>f-Bay Kuliner</h1>
    <p>Platform data kuliner favorit Anda</p>
</div>

<div class="container">
    <div class="card p-4">
        <h2 class="text-center">Tambah Data Kuliner</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <select name="jenis" class="form-select" required>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama kuliner" required>
            </div>

            <div class="mb-3">
                <label for="daerah" class="form-label">Daerah / Jenis</label>
                <input type="text" name="daerah" class="form-control" placeholder="Asal daerah atau jenis" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" class="form-control" rows="3" placeholder="Tambahkan keterangan (opsional)"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">Simpan</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];
    $nama = $_POST['nama'];
    $daerah = $_POST['daerah'];
    $keterangan = $_POST['keterangan'];

    if ($jenis === 'makanan') {
        $sql = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan, keterangan) 
                VALUES ('$nama', '$daerah', '$keterangan')";
    } else {
        $sql = "INSERT INTO tbl_minuman (nama_minuman, jenis_minuman, keterangan) 
                VALUES ('$nama', '$daerah', '$keterangan')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
