<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
    header("Location: admin-login.html");
    exit();
}
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pendaftaran = $_POST['id_pendaftaran'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $th_ajaran = $_POST['th_ajaran'];
    $jurusan = $_POST['jurusan'];
    $nm_peserta = $_POST['nm_peserta'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $almt_peserta = $_POST['almt_peserta'];

    // Query untuk memasukkan data siswa
    $sql = "INSERT INTO tb_pendaftaran (id_pendaftaran, tgl_daftar, th_ajaran, jurusan, nm_peserta, tmp_lahir, tgl_lahir, jk, agama, almt_peserta) 
            VALUES ('$id_pendaftaran', '$tgl_daftar', '$th_ajaran', '$jurusan', '$nm_peserta', '$tmp_lahir', '$tgl_lahir', '$jk', '$agama', '$almt_peserta')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Siswa berhasil ditambahkan!'); window.location.href='admin-dashboard.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
