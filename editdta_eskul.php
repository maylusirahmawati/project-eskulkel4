<?php
require_once 'db.php';

$getekstrakulikulerid = $_GET['id'];

$nama_eskul = $_POST['nama_eskul'];
$pembina = $_POST['pembina'];
$deskripsi = $_POST['deskripsi'];

$gambar = $_FILES['gambar']['name'];
$picture = $_FILES['gambar'] ['tmp_name']; 
$folder = "uploads/" . $gambar; move_uploaded_file($picture, $folder);

if ($gambar) {
    $sql = "UPDATE ekstrakulikuler SET nama_eskul='$nama_eskul', pembina='$pembina', deskripsi='$deskripsi', gambar='$gambar' WHERE id=$getekstrakulikulerid";
} else {
    $sql =  "UPDATE ekstrakulikuler SET nama_eskul='$nama_eskul', pembina='$pembina', deskripsi='$deskripsi' WHERE id=$getekstrakulikulerid";
}

    if ($conn->query($sql) === TRUE) {
        header("Location:dataeskul.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }


$conn->close();
?>