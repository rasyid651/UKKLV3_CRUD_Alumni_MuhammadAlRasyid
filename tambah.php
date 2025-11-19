<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Alumni</title>
    <link rel="stylesheet" href="./css/tambah.css">
</head>

<body>

    <video autoplay muted loop id="video-bg">
        <source src="bg1.mp4" type="video/mp4">
    </video>

    <div id="content"></div>

    <div class="container-nav">
        <div class="nav">
            <h1>Manajemen Data Alumni</h1>
            <a href="index.php">Kembali</a>
        </div>
    </div>

    <main>
        <div class="container-form">
            <h2>Tambah Data Alumni</h2>
            <form action="tambah.php" method="post">
                <input type="text" name="Nama_Lengkap" placeholder="Nama" required>
                <input type="text" name="Tahun_Lulus" placeholder="Tahun Lulus" required>
                <input type="text" name="Jurusan" placeholder="Jurusan" required>
                <input type="text" name="Pekerjaan_Saat_Ini" placeholder="Pekerjaan" required>
                <input type="text" name="Nomor_Telepon" placeholder="Nomor Telepon" required>
                <input type="text" name="Email" placeholder="Email" required>
                <textarea name="Alamat" placeholder="Alamat" required></textarea>
                <button name="simpan">Simpan</button>

                <?php
                if (isset($_POST['simpan'])) {
                    $sql = "INSERT INTO alumni (
            Nama_Lengkap,Tahun_Lulus,Jurusan,Pekerjaan_Saat_Ini,Nomor_Telepon,Email,Alamat
            ) VALUES 
            (
            '$_POST[Nama_Lengkap]',
            '$_POST[Tahun_Lulus]',
            '$_POST[Jurusan]',
            '$_POST[Pekerjaan_Saat_Ini]',
            '$_POST[Nomor_Telepon]',
            '$_POST[Email]',
            '$_POST[Alamat]')";
                    mysqli_query($koneksi, $sql);
                    echo "<p>Berhasil! <a href='index.php'>Kembali</a></p>";
                }
                ?>

            </form>
        </div>
    </main>

</body>

</html>