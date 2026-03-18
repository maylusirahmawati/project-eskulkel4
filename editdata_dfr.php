<?php
require_once 'db.php';

$getdaftarid = $_GET['id'];

$nama_pendaftar = $_POST['nama_pendaftar'];
$tanggal_daftar = $_POST['tanggal_daftar'];
$alasan = $_POST['alasan'];

if ($getdaftarid > 0) {
    $sql = "UPDATE daftar SET nama_pendaftar='$nama_pendaftar', tanggal_daftar='$tanggal_daftar', alasan='$alasan' WHERE id_daftar=$getdaftarid";
} else {
    echo "ID tidak valid.";
}

    if ($conn->query($sql) === TRUE) {
        header("Location:datadftr.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }


$conn->close();
?>