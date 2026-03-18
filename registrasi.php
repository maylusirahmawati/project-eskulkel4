<?php
require_once "regisform.php";
require_once "db.php";

// Ambil data dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi email sudah terdaftar
$cek = $conn->prepare("SELECT email FROM registrasi WHERE email = ?");
$cek->bind_param("s", $email);
$cek->execute();
$cek->store_result();

if ($cek->num_rows > 0) {
    echo "<script>
        alert('Email sudah terdaftar!');
        location.href = 'regisform.php';
    </script>";
    exit();
}

// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// INSERT dengan role = user
$sql = $conn->prepare("INSERT INTO registrasi (username, email, password, role) VALUES (?, ?, ?, 'user')");
$sql->bind_param("sss", $username, $email, $hashedPassword);

if ($sql->execute()) {
    echo "<script>
        alert('Registrasi berhasil!');
        location.href = 'siswaform.php';
    </script>";
} else {
    echo "Error: " . $sql->error;
}

$sql->close();
$conn->close();
?>
