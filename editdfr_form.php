<?php
require_once 'db.php';
//ambil dari id url
$getdaftarid = $_GET['id'];

//query data product berdasarkan id
$sql = "SELECT * FROM daftar WHERE id_daftar=$getdaftarid";
$result = $conn->query($sql);

//ubah data ke array
$daftar = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="edit.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>EDIT DATA PENDAFTAR</h2>
    <div class="wrapper">
        <form action="editdata_dfr.php?id=<?= $getdaftarid ?>" method="POST" enctype="multipart/form-data">
            <label for="nama_pendaftar">Nama Pendaftar</label>
            <input type="text" name="nama_pendaftar" value="<?=$daftar['nama_pendaftar']?>"> <br> <br>
            
            <label for="tanggal_daftar">Tanggal Daftar</label> 
            <input type="date" name="tanggal_daftar" value="<?= $daftar['tanggal_daftar'] ?>"><br> <br>

            <label for="alasan">Alasan</label> 
            <input type="text" name="alasan" value="<?= $daftar['alasan'] ?>"> <br> <br>
           
            <button type="submit">Update Data Pendaftar</button>
        </form>
    </div>
</body>
</html>