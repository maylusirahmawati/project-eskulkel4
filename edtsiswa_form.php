<?php
require_once 'db.php';
//ambil dari id url
$getsiswaid = $_GET['id'];

//query data product berdasarkan id
$sql = "SELECT * FROM siswa WHERE id_siswa=$getsiswaid";
$result = $conn->query($sql);

//ubah data ke array
$siswa = $result->fetch_assoc();
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
    <h2>EDIT SISWA</h2>
    <div class="wrapper">
        <form action="editdta_siswa.php?id=<?= $getsiswaid ?>" method="POST" enctype="multipart/form-data">
            <label for="nisn">NISN</label>
            <input type="number" name="nisn" value="<?=$siswa['nisn']?>"> <br> <br>
            
            <label for="nama_siswa">Nama Siswa/i</label> 
            <input type="text" name="nama_siswa" value="<?= $siswa['nama_siswa'] ?>"><br> <br>

            <label for="kelas">Kelas</label> 
            <input type="number" name="kelas" value="<?= $siswa['kelas'] ?>"> <br> <br>

            <label for="jenis_kelamin">Jenis Kelamin</label> 
            <input type="text" name="jenis_kelamin" value="<?= $siswa['jenis_kelamin'] ?>"> <br> <br>

            <label for="no_tlp">No Tlp</label> 
            <input type="number" name="no_tlp" value="<?= $siswa['no_tlp'] ?>"> <br> <br>

            <label for="alamat">Alamat</label> 
            <input type="text" name="alamat" value="<?= $siswa['alamat'] ?>">  <br> <br>

            <button type="submit">Update Data Siswa</button>
        </form>
    </div>
</body>
</html>