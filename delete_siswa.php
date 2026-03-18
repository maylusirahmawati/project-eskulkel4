<?php

require_once 'db.php';

//ambil dari id dari url
$getsiswaid = $_GET['id'];

//query hapus data product berdasarkan id
$sql = "DELETE FROM siswa WHERE id_siswa = $getsiswaid";
if ($conn->query($sql) === TRUE) {
    header("Location: datasiswa.php");
} else {
    echo "Error deleting record: ". $conn->error;
}
$conn->close();