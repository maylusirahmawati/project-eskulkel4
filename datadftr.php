<?php
include "adminpage.php";
require_once "db.php";
$sql = "SELECT daftar.*, ekstrakulikuler.nama_eskul  FROM daftar JOIN ekstrakulikuler ON daftar.eskul_id = ekstrakulikuler.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_page.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h2>Data Pendaftar Eskul</h2>
            <span><a href="homepage.php">Home</a></span>
        </div>
    
        <div class="table_jdl">
            <table border="1px solid">
                <tr>
                    <th>ID PENDAFTAR</th>
                    <th>ID ESKUL</th>
                    <th>NAMA PENDAFTAR</th>
                    <th>TANGGAL DAFTAR</th>
                    <th>ALASAN</th>
                    <th>Aksi</th>
                </tr>
                <?php
                while ($daftar = $result->fetch_assoc()) {
                    ?>
                <tr>
                    <td><?= $daftar ['id_daftar'] ?></td>
                    <td><?= $daftar ['nama_eskul'] ?></td>
                    <td><?= $daftar ['nama_pendaftar'] ?></td>
                    <td><?= $daftar ['tanggal_daftar']?></td>
                    <td><?= $daftar ['alasan']?></td>

                    <td><a href="editdfr_form.php?id=<?= $daftar['id_daftar']?>"  class="btn">Edit</a>
                    <a href="delete_dftr.php?id=<?= $daftar['id_daftar']?>" class="btn btn-delete">Delete</a></td>   
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>