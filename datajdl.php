<?php
include "adminpage.php";
require_once "db.php";
$sql = "SELECT * FROM jadwal";
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
            <h2>Data Jadwal Eskul</h2>
            <span><a href="homepage.php">Home</a></span>
        </div>
    
        <div class="table_jdl">
            <table border="1px solid">
                <tr>
                    <th>ID ESKUL</th>
                    <th>NAMA ESKUL</th>
                    <th>HARI</th>
                    <th>JAM MULAI-SELESAI</th>
                    <th>TEMPAT</th>
                    <th>Aksi</th>
                
                </tr>
                <?php
                while ($jadwal = $result->fetch_assoc()) {
                    ?>
                <tr>
                    <td><?= $jadwal ['id_jadwal'] ?></td>
                    <td><?= $jadwal ['nama_eskul'] ?></td>
                    <td><?= $jadwal ['hari'] ?></td>
                    <td><?= $jadwal ['jam_mulai_selesai']?></td>
                    <td><?= $jadwal ['tempat']?></td>

                    <td><a href="editjdl_form.php?id=<?= $jadwal['id_jadwal']?>"  class="btn">Edit</a>
                    <a href="delete_jadwal.php?id=<?= $jadwal['id_jadwal']?>" class="btn btn-delete">Delete</a></td>   
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>