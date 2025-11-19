<?php
session_start();
include 'koneksi.php';
$id_alumni = $_GET['Id_Alumni'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM alumni WHERE Id_Alumni='$id_alumni'"));
if (isset($_POST['perbarui'])) {
    $sql = "UPDATE alumni SET 
    Nama_Lengkap='$_POST[Nama_Lengkap]',
    Tahun_Lulus='$_POST[Tahun_Lulus]',
    Jurusan='$_POST[Jurusan]',
    Pekerjaan_Saat_Ini='$_POST[Pekerjaan_Saat_Ini]',
    Nomor_Telepon='$_POST[Nomor_Telepon]',
    Email='$_POST[Email]',
    Alamat='$_POST[Alamat]'
    WHERE Id_Alumni='$id_alumni'";

    mysqli_query($koneksi, $sql);
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Alumni</title>
    <link rel="stylesheet" href="./css/edit.css">
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
            <h2>Edit Data Alumni</h2>
            <form method="post">
                <input type="text" name="Nama_Lengkap" value="<?= $data['Nama_Lengkap'] ?>" placeholder="Nama" required>
                <input type="text" name="Tahun_Lulus" value="<?= $data['Tahun_Lulus'] ?>" placeholder="Tahun Lulus" required>
                <input type="text" name="Jurusan" value="<?= $data['Jurusan'] ?>" required>
                <input type="text" name="Pekerjaan_Saat_Ini" value="<?= $data['Pekerjaan_Saat_Ini'] ?>" placeholder="Pekerjaan" required>
                <input type="text" name="Nomor_Telepon" value="<?= $data['Nomor_Telepon'] ?>" placeholder="Nomor Telepon" required>
                <input type="text" name="Email" value="<?= $data['Email'] ?>" placeholder="Email" required>
                <textarea name="Alamat" placeholder="Alamat" required> <?= $data['Alamat'] ?> </textarea>
                <button type="submit" name="perbarui">Perbarui</button>
            </form>

        </div>
    </main>

</body>

</html>