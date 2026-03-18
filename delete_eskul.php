<?php

require_once 'db.php';

//ambil dari id dari url
$getekstrakulikulerid = $_GET['id'];

//query hapus data product berdasarkan id
$sql = "DELETE FROM ekstrakulikuler WHERE id = $getekstrakulikulerid";
if ($conn->query($sql) === TRUE) {
    header("Location: dataeskul.php");
} else {
    echo "Error deleting record: ". $conn->error;
}
$conn->close();