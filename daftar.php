<?php
require_once "db.php";

$eskul_id = $_POST ['eskul_id'];
$nama_pendaftar = $_POST['nama_pendaftar'];
$tanggal_daftar = $_POST['tanggal_daftar'];
$alasan = $_POST['alasan'];

$sql = "INSERT INTO daftar (eskul_id, nama_pendaftar, tanggal_daftar, alasan) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isss", $eskul_id, $nama_pendaftar, $tanggal_daftar, $alasan);

if ($stmt->execute()) {
    echo "<script> alert ('Data siswa berhasil di tambahkan');
    location.href = 'jadwal_eskul.php'; 
    </script>";
} else {
    echo "<script> alert ('Data siswa gagal ditambahkan');
    location.href = 'daftar_form.php'; 
    </script>". $stmt->error;
}

$stmt->close();
$conn->close();

?>