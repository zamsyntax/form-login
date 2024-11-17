<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pendaftaran = $_POST['id_pendaftaran'];

    $query = "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '$id_pendaftaran'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['id_pendaftaran'] = $id_pendaftaran;
        header("Location: siswa-data.php");
        exit();
    } else {
        echo "<script>alert('ID Pendaftaran tidak ditemukan!');</script>";
    }
}
?>
