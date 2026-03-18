<?php
require_once 'db.php';
//ambil dari id url
$getekstrakulikulerid = $_GET['id'];

//query data product berdasarkan id
$sql = "SELECT * FROM ekstrakulikuler WHERE id=$getekstrakulikulerid";
$result = $conn->query($sql);

//ubah data ke array
$ekstrakulikuler = $result->fetch_assoc();
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
    <h2>EDIT EKSTRAKULIKULER</h2>
    <div class="wrapper">
        <form action="editdta_eskul.php?id=<?= $getekstrakulikulerid ?>" method="POST" enctype="multipart/form-data">
            <label for="nama_eskul">Nama Eskul</label>
            <input type="text" name="nama_eskul" value="<?=$ekstrakulikuler['nama_eskul']?>"> <br> <br>
            
            <label for="pembina">Pembina</label> 
            <input type="text" name="pembina" value="<?= $ekstrakulikuler['pembina'] ?>"><br> <br>

            <label for="deskripsi">Deskripsi</label> 
            <input type="text" name="deskripsi" value="<?= $ekstrakulikuler['deskripsi'] ?>"> <br> <br>

            <label for="gambar">Gambar Buku</label><br>
            <input type="file" name="gambar" id="gambar"><br><br>
            <img src="uploads/<?= $ekstrakulikuler['gambar']?>" alt="" width="20%"><br><br>

            <button type="submit">Update Data Ekstrakulikuler</button>
        </form>
    </div>
</body>
</html>