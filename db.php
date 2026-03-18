<?php

//koneksi database
$host = 'localhost';
$db = 'eskul'; //yang diganti di bagian ini
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

//jika koneksi ggl akan muncul
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

?>