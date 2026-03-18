<?php
require_once "siswaform.php";
require_once "db.php";

$regis_id = $_POST ['regis_id'];
$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO siswa (nisn, regis_id, nama_siswa, kelas, jenis_kelamin, no_tlp, alamat) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iisssis", $nisn, $regis_id, $nama_siswa, $kelas, $jenis_kelamin, $no_tlp, $alamat);

if ($stmt->execute()) {
    echo "<script> alert ('Data siswa berhasil di tambahkan');
    location.href = 'congratulation.php'; 
    </script>";
} else {
    echo "<script> alert ('Data siswa gagal ditambahkan');
    location.href = 'siswaform.php'; 
    </script>". $stmt->error;
}

$stmt->close();
$conn->close();

?>