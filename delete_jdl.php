<?php

require_once 'db.php';

//ambil dari id dari url
$getjadwalid = $_GET['id'];

//query hapus data product berdasarkan id
$sql = "DELETE FROM jadwal WHERE id_jadwal = $getjadwalid";
if ($conn->query($sql) === TRUE) {
    header("Location: datajdl.php");
} else {
    echo "Error deleting record: ". $conn->error;
}
$conn->close();