<?php

require_once 'db.php';

//ambil dari id dari url
$getdaftarid = $_GET['id'];

//query hapus data product berdasarkan id
$sql = "DELETE FROM daftar WHERE id_daftar = $getdaftarid";
if ($conn->query($sql) === TRUE) {
    header("Location: datadftr.php");
} else {
    echo "Error deleting record: ". $conn->error;
}
$conn->close();