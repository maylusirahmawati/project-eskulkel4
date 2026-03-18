<?php
require_once 'db.php';
//ambil dari id url
$getjadwalid = $_GET['id'];

//query data product berdasarkan id
$sql = "SELECT * FROM jadwal WHERE id_jadwal=$getjadwalid";
$result = $conn->query($sql);

//ubah data ke array
$jadwal = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Document</title>
</head>
<body>
    <h2>EDIT JADWAL EKSTRAKULIKULER</h2>
    <div class="wrapper">
        <form action="edit_jdl.php?id=<?= $getjadwalid ?>" method="POST" enctype="multipart/form-data">
            <label for="nama_eskul">Nama Eskul</label>
            <input type="text" name="nama_eskul" value="<?=$jadwal['nama_eskul']?>"> <br> <br>
            
            <label for="hari">Hari</label> 
            <input type="text" name="hari" value="<?= $jadwal['hari'] ?>"><br> <br>

            <label for="jam_mulai_selesai">Jam Mulai-Selesai</label> 
            <input type="text" name="jam_mulai_selesai" value="<?= $jadwal['jam_mulai_selesai'] ?>"> <br> <br>

            <label for="tempat">Tempat</label>
            <input type="text" name="tempat" value="<?= $jadwal['tempat'] ?>"><br><br>
           
            <button type="submit">Update Data Ekstrakulikuler</button>
        </form>
    </div>
</body>
</html>