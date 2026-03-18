<?php
include "adminpage.php";
require_once "db.php";
$sql = "SELECT * FROM siswa";
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
            <h2>Data Siswa</h2>
            <span><a href="homepage.php">Home</a></span>
        </div>

        <table border="1px solid">
            <tr>
                <th>Id Siswa</th>
                <th>Nisn</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>No tlp</th>
                <th>Alamat</th>
                <th>Aksi</th>
            
            </tr>
            <?php
            while ($siswa = $result->fetch_assoc()) {
                ?>
            <tr>
                <td><?= $siswa ['id_siswa'] ?></td>
                <td><?= $siswa ['nisn'] ?></td>
                <td><?= $siswa ['nama_siswa'] ?></td>
                <td><?= $siswa ['kelas'] ?></td>
                <td><?= $siswa ['jenis_kelamin']?></td>
                <td><?= $siswa ['no_tlp']?></td>
                <td><?= $siswa ['alamat']?></td>
                
                <td><a href="edtsiswa_form.php?id=<?= $siswa['id_siswa']?>"  class="btn">Edit</a>
                <a href="delete_siswa.php?id=<?= $siswa['id_siswa']?>" class="btn btn-delete">Delete</a></td>   
            </tr>
            <?php } ?>
        </table>
    </div>
    
</body>
</html>