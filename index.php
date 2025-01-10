<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>f-Bay Kuliner</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling untuk Card */
        .card {
            width: 18rem;
            margin-bottom: 20px;
        }
        .card-img-top {
            width: 100%; /* Memastikan lebar penuh sesuai card */
            height: auto; /* Mempertahankan aspek rasio */
            aspect-ratio: 4 / 3; /* Atur rasio landscape 4x3 */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin-bottom: 50px; /* Jarak di bagian bawah konten utama */
        }

        /* Styling untuk Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
        }
        .header h2 {
            margin: 0;
        }
        .header .btn-about {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 8px 15px;
            font-size: 14px;
        }
        
        /* Footer */
        .footer {
            text-align: center;
            padding: 15px;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
            margin-top: 50px; /* Memberikan jarak antara body dan footer */
        }
    </style>
</head>
<body>

    <!-- Header dengan nama dan tombol About -->
    <div class="header">
        <h2>f-Bay Kuliner</h2>
        <a href="about.php" class="btn-about">About</a>
    </div>

    <!-- Konten utama -->
    <div class="container mt-5">
        <h4 class="mb-4">Daftar Makanan</h4>
        <div class="row gy-4">
            <?php
            $result = $conn->query("SELECT * FROM tbl_makanan");
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='col-md-4'>
                    <div class='card h-100'>
                        <img src='uploads/{$row['foto_makanan']}' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$row['nama_makanan']}</h5>
                            <p class='card-text'>Daerah: {$row['daerah_makanan']}</p>
                            <p class='card-text'>Keterangan: {$row['keterangan']}</p>
                            <a href='edit.php?type=makanan&id={$row['id_makanan']}' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='delete.php?type=makanan&id={$row['id_makanan']}' class='btn btn-danger btn-sm'>Hapus</a>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>

        <!-- Daftar Minuman -->
        <h4 class="mt-5 mb-4">Daftar Minuman</h4>
        <div class="row gy-4">
            <?php
            $result = $conn->query("SELECT * FROM tbl_minuman");
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='col-md-4'>
                    <div class='card h-100'>
                        <img src='uploads/{$row['foto_minuman']}' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$row['nama_minuman']}</h5>
                            <p class='card-text'>Jenis: {$row['jenis_minuman']}</p>
                            <p class='card-text'>Keterangan: {$row['keterangan']}</p>
                            <a href='edit.php?type=minuman&id={$row['id_minuman']}' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='delete.php?type=minuman&id={$row['id_minuman']}' class='btn btn-danger btn-sm'>Hapus</a>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 f-Bay Kuliner. All Rights Reserved.</p>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
