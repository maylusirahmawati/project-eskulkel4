<?php
session_start();
require_once "loginform.php";
require_once "db.php";

// ambil data dari form simpan ke dalam variable
$email = $_POST['email'];
$password = $_POST['password'];

//ambil semua data dari tabel user database
$sql = "SELECT * FROM registrasi WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows >= 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {

        $_SESSION['email'] = $row['email'];
        $_SESSION['nama'] = $row['nama'];    
        $_SESSION['role'] = $row['role']; 

        if ($row['role'] === 'admin') {
            echo "<script>
                alert('Login Admin Berhasil!');
                location.href = 'adminpage.php'; 
            </script>";
        } else {
            echo "<script>
                alert('Login Berhasil!');
                location.href = 'homepage.php'; // user biasa
            </script>";
        }

    } else {
        echo "<script>
            alert('Password salah!');
            location.href = 'loginform.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Email tidak ditemukan.');
        location.href = 'loginform.php';
    </script>";
}

$stmt->close();
$conn->close();

?>
