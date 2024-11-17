<?php
session_start();
include 'config.php';


// Cek apakah siswa sudah login
if (!isset($_SESSION['siswa_logged_in']) || !$_SESSION['siswa_logged_in']) {
    header("Location: login.php");
    exit();
}

$id_pendaftaran = $_SESSION['id_pendaftaran'];

// Query untuk mengambil data siswa berdasarkan ID pendaftaran
$sql = "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    // ... (tampilkan data siswa dalam HTML)
} else {
    echo "Data tidak ditemukan.";
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
// ... (kode HTML untuk menampilkan data siswa)
</html>
