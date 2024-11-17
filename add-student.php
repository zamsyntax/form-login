<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
    header("Location: admin-login.html");
    exit();
}
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1>Tambah Siswa</h1>
            <a href="admin-dashboard.php" class="btn">Kembali ke Dashboard</a>
        </header>

        <form action="add-student-action.php" method="POST">
            <div class="input-group">
                <input type="text" name="id_pendaftaran" placeholder="ID Pendaftaran" required>
            </div>
            <div class="input-group">
                <input type="date" name="tgl_daftar" placeholder="Tanggal Daftar" required>
            </div>
            <div class="input-group">
                <input type="text" name="th_ajaran" placeholder="Tahun Ajaran" required>
            </div>
            <div class="input-group">
                <input type="text" name="jurusan" placeholder="Jurusan" required>
            </div>
            <div class="input-group">
                <input type="text" name="nm_peserta" placeholder="Nama Peserta" required>
            </div>
            <div class="input-group">
                <input type="text" name="tmp_lahir" placeholder="Tempat Lahir" required>
            </div>
            <div class="input-group">
                <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required>
            </div>
            <div class="input-group">
                <select name="jk" required>
                    <option value="" disabled selected>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="input-group">
                <input type="text" name="agama" placeholder="Agama" required>
            </div>
            <div class="input-group">
                <textarea name="almt_peserta" placeholder="Alamat Peserta" required></textarea>
            </div>
            <button type="submit" class="btn">Tambah Siswa</button>
        </form>
    </div>
</body>
</html>
