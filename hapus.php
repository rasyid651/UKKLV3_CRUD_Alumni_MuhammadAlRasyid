<?php
include 'koneksi.php';

// Pastikan ada parameter id
if (isset($_GET['Id_Alumni'])) {
    $Id_Alumni = intval($_GET['Id_Alumni']);

    // Hapus data
    mysqli_query($koneksi, "DELETE FROM alumni WHERE Id_Alumni = $Id_Alumni");

    // Menyusun ulang ID agar urut lagi dari 1
    mysqli_query($koneksi, "SET @num := 0");
    mysqli_query($koneksi, "UPDATE alumni SET Id_Alumni = @num := @num + 1 ORDER BY Id_Alumni");

    // Reset auto increment agar lanjut dari ID terakhir
    mysqli_query($koneksi, "ALTER TABLE alumni AUTO_INCREMENT = 1");
}

// Kembali ke halaman utama
header("location: index.php");
exit;
