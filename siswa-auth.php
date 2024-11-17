<?php
session_start();
include 'koneksi.php'; // Pastikan koneksi.php sudah benar

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pendaftaran = $_POST['id_pendaftaran'];

    $query = "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['id_pendaftaran'] = $id_pendaftaran;
        header("Location: siswa-data.php");
        exit();
    } else {
        echo "<script>alert('ID Pendaftaran tidak ditemukan!'); window.location.href='siswa-login.html';</script>";
    }
}

mysqli_close($conn);
?>
