<?php
session_start();
if (!isset($_SESSION['id_pendaftaran'])) {
    header("Location: siswa-login.html");
    exit();
}
include 'koneksi.php';

$id_pendaftaran = $_SESSION['id_pendaftaran'];

$query = "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);

if (!$student) {
    echo "<script>alert('Data tidak ditemukan!'); window.location.href='siswa-login.html';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #333;
        }

        /* Container */
        .dashboard-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #f1f1f1;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            color: #333;
        }

        .btn-logout {
            background: #e74c3c;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .btn-logout:hover {
            background: #c0392b;
        }

        .btn-logout:active {
            background: #a5281e;
        }

        /* Content Section */
        .content h2 {
            font-size: 20px;
            margin-bottom: 15px;
            border-bottom: 2px solid #f1f1f1;
            padding-bottom: 5px;
        }

        /* Table Styles */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: #f9f9f9;
        }

        .info-table th, .info-table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .info-table th {
            background: #4facfe;
            color: #fff;
            font-weight: bold;
        }

        .info-table td {
            color: #333;
        }

        .info-table tr:hover {
            background: #f1f1f1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 18px;
            }

            .btn-logout {
                padding: 8px 12px;
                font-size: 12px;
            }

            .info-table th, .info-table td {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <header class="header">
            <h1>Data Siswa</h1>
            <a href="logout-siswa.php" class="btn-logout">Logout</a>
        </header>

        <section class="content">
            <h2>Informasi Pribadi</h2>
            <table class="info-table">
                <tr>
                    <th>ID Pendaftaran</th>
                    <td><?php echo $student['id_pendaftaran']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Daftar</th>
                    <td><?php echo $student['tgl_daftar']; ?></td>
                </tr>
                <tr>
                    <th>Tahun Ajaran</th>
                    <td><?php echo $student['th_ajaran']; ?></td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td><?php echo $student['jurusan']; ?></td>
                </tr>
                <tr>
                    <th>Nama Peserta</th>
                    <td><?php echo $student['nm_peserta']; ?></td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td><?php echo $student['tmp_lahir']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><?php echo $student['tgl_lahir']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $student['jk']; ?></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><?php echo $student['agama']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?php echo nl2br($student['almt_peserta']); ?></td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
