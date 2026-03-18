<?php
require_once 'db.php';
$sql = "SELECT * FROM ekstrakulikuler";
$result= $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Eskul</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="formdaftar.css">
</head>
<body>
    <button class="skillzone-btn">
        <a href="homepage.php"><i class="fa-solid fa-bullseye"></i> SKILL ZONE</a>
    </button>

    <div class="container">
        <div class="left"style="width: 50%;">
            <form action="daftar.php" method="post" >
                <div class="card">
                    <h1>Welcome!!</h1>
                    <p class="desc">Ikuti eskul favoritmu di SkillZone, daftar mudah,<br> pengalaman luar biasa.</p>
                    <label for="nama_pendaftar">Nama Siswa</label>
                    <input type="text" id="nama_pendaftar" name="nama_pendaftar">
                    <label for="nama_eskul">Eskul Yang Di Ikuti</label>
                    <select name="eskul_id" id="eskul_id">
                        <?php while($ekstrakulikuler = $result->fetch_assoc()) {?> 
                        <option value="<?=$ekstrakulikuler['id']?>"><?=$ekstrakulikuler['nama_eskul']?></option>
                        <?php } ?>
                    </select> <br> <br>
                    <label for="tanggaldaftar">Tanggal Daftar</label>
                    <input type="date" id="tanggaldaftar" name="tanggaldaftar">

                    <label for="alasan">Alasan</label>
                    <textarea id="alasan" name="alasan"></textarea>

                    <p class="note">Sudah yakin dengan datanya? Kalau sudah oke klik daftar ya!</p>
                    <button class="btn">Daftar !</button>
                </div>
            </form>
        </div>

        <div class="right" style="width: 50%;">
            <img src="picture/logdaftar.png" alt="Illustration">
        </div>
    </div>

</body>
</html>
