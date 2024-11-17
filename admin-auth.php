<?php
session_start();
include 'koneksi.php'; // Pastikan koneksi.php sudah benar

// Tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mengambil data admin berdasarkan username
$query = "SELECT * FROM tb_admin WHERE username='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 1) {
    $admin = mysqli_fetch_assoc($result);
    
    // Verifikasi password
    if (password_verify($password, $admin['password'])) {
        $_SESSION['id_admin'] = $admin['id_admin'];
        $_SESSION['nm_admin'] = $admin['nm_admin'];
    
        // Redirect ke dashboard admin
        header("Location: admin-dashboard.php");
        exit();
    } else {
        echo "<script>alert('Password salah!'); window.location.href='admin-login.html';</script>";
    }
} else {
    echo "<script>alert('Username tidak ditemukan!'); window.location.href='admin-login.html';</script>";
}

mysqli_close($conn);
?>
