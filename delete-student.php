<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
    header("Location: admin-login.html");
    exit();
}
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_pendaftaran = $_GET['id'];
    $query = "DELETE FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data siswa berhasil dihapus!'); window.location.href='admin-dashboard.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("Location: admin-dashboard.php");
    exit();
}

mysqli_close($conn);
?>
