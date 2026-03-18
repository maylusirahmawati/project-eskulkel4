<?php
require_once "db.php";
$sql = "SELECT * FROM jadwal";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jdla_eskul.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="homepage.php"><i class="fa-solid fa-bullseye"></i> SKILL ZONE</a>
            <div class="nav">
                <img src="picture/logsiswa2.png" alt="">
                <span>JADWAL KEGIATAN ESKUL</span>
           </div>
        </nav>
    </header>  
    
    <div class="table_jdl">
        <table border="1px solid">
            <tr>
                <th>ID ESKUL</th>
                <th>NAMA ESKUL</th>
                <th>HARI</th>
                <th>JAM MULAI-SELESAI</th>
                <th>TEMPAT</th>
              
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
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>