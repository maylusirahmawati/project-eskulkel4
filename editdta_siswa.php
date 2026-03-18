<?php
require_once 'db.php';

$getsiswaid = $_GET['id'];

$nisn= $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];


if ($getsiswaid > 0) {
    $sql = "UPDATE siswa SET nisn='$nisn', nama_siswa='$nama_siswa', kelas='$kelas', jenis_kelamin='$jenis_kelamin', no_tlp='$no_tlp', alamat='$alamat' WHERE id_siswa=$getsiswaid";
} else {
    echo "ID tidak valid.";
}

    if ($conn->query($sql) === TRUE) {
        header("Location:datasiswa.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }


$conn->close();
?>