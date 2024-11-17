<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
    header("Location: admin-login.html");
    exit();
}
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_pendaftaran = $_GET['id'];
    $query = "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'";
    $result = mysqli_query($conn, $query);
    $student = mysqli_fetch_assoc($result);
} else {
    header("Location: admin-dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1>Edit Siswa</h1>
            <a href="admin-dashboard.php" class="btn">Kembali ke Dashboard</a>
        </header>

        <form action="edit-student-action.php" method="POST">
            <input type="hidden" name="id_pendaftaran" value="<?php echo $student['id_pendaftaran']; ?>">
            <div class="input-group">
                <input type="date" name="tgl_daftar" placeholder="Tanggal Daftar" value="<?php echo $student['tgl_daftar']; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" name="th_ajaran" placeholder="Tahun Ajaran" value="<?php echo $student['th_ajaran']; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" name="jurusan" placeholder="Jurusan" value="<?php echo $student['jurusan']; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" name="nm_peserta" placeholder="Nama Peserta" value="<?php echo $student['nm_peserta']; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" name="tmp_lahir" placeholder="Tempat Lahir" value="<?php echo $student['tmp_lahir']; ?>" required>
            </div>
            <div class="input-group">
                <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $student['tgl_lahir']; ?>" required>
            </div>
            <div class="input-group">
                <select name="jk" required>
                    <option value="" disabled>Jenis Kelamin</option>
                    <option value="Laki-Laki" <?php if ($student['jk'] == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php if ($student['jk'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                </select>
            </div>
            <div class="input-group">
                <input type="text" name="agama" placeholder="Agama" value="<?php echo $student['agama']; ?>" required>
            </div>
            <div class="input-group">
                <textarea name="almt_peserta" placeholder="Alamat Peserta" required><?php echo $student['almt_peserta']; ?></textarea>
            </div>
            <button type="submit" class="btn">Update Siswa</button>
        </form>
    </div>
</body>
</html>
