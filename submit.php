<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_psb";

$conn = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
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

// Simpan ke database
$sql = "INSERT INTO tb_pendaftaran (id_pendaftaran, tgl_daftar, th_ajaran, jurusan, nm_peserta, tmp_lahir, tgl_lahir, jk, agama, almt_peserta) 
        VALUES ('$id_pendaftaran', '$tgl_daftar', '$th_ajaran', '$jurusan', '$nm_peserta', '$tmp_lahir', '$tgl_lahir', '$jk', '$agama', '$almt_peserta')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
