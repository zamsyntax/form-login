<?php
session_start();
include 'config.php';

// Cek apakah admin sudah login
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: login.php");
    exit();
}

// ... (kode untuk menampilkan data siswa dalam tabel, dan form untuk tambah, edit, hapus data)

// Contoh query untuk menampilkan data:
$sql = "SELECT * FROM tb_pendaftaran";
$result = mysqli_query($conn, $sql);

// ... (proses menampilkan data dalam tabel HTML)

// ... (form tambah data)
// ... (logika PHP untuk memproses tambah, edit, hapus data)

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
// ... (kode HTML untuk tabel dan form)
</html>
