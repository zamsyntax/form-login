<?php
include 'koneksi.php'; // Pastikan file koneksi ke database sudah benar

// Data Admin Baru
$nm_admin = 'Administrator';
$username = 'admin';
$password = password_hash('admin123', PASSWORD_DEFAULT); // Password terenkripsi

// Query untuk menambahkan admin
$sql = "INSERT INTO tb_admin (nm_admin, username, password) VALUES ('$nm_admin', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Admin berhasil dibuat!";
} else {
    echo "Gagal membuat admin: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
