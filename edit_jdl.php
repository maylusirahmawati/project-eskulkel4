<?php
require_once 'db.php';

$getjadwalid = $_GET['id'];

$nama_eskul= $_POST['nama_eskul'];
$hari = $_POST['hari'];
$jam_mulai_selesai = $_POST['jam_mulai_selesai'];
$tempat = $_POST['tempat'];


if ($getjadwalid > 0) {
    $sql = "UPDATE jadwal SET nama_eskul='$nama_eskul', hari='$hari', jam_mulai_selesai='$jam_mulai_selesai', tempat='$tempat' WHERE id_jadwal=$getjadwalid";
} else {
    echo "ID tidak valid.";
}

    if ($conn->query($sql) === TRUE) {
        header("Location:datajdl.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }


$conn->close();
?>