<?php
include "adminpage.php";
require_once "db.php";
$sql = "SELECT * FROM ekstrakulikuler";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_page.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h2>Data Ekstrakulikuler</h2>
            <span><a href="homepage.php">Home</a></span>
        </div>

        <table border="1px solid">
            <tr>
                <th>Id</th>
                <th>Nama Eskul</th>
                <th>Pembina</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            
            </tr>
            <?php
            while ($ekstrakulikuler = $result->fetch_assoc()) {
                ?>
            <tr>
                <td><?= $ekstrakulikuler ['id'] ?></td>
                <td><?= $ekstrakulikuler ['nama_eskul'] ?></td>
                <td><?= $ekstrakulikuler ['pembina'] ?></td>
                <td><?= $ekstrakulikuler ['deskripsi'] ?></td>
                <td>
                <img src="uploads/<?= $ekstrakulikuler ['gambar'] ?>" alt="" width="30%">
                </td>
                <td><a href="edteskul_form.php?id=<?= $ekstrakulikuler['id']?>" class="btn">Edit</a> 
                <br>
                <a href="delete_eskul.php?id=<?= $ekstrakulikuler['id']?>" class="btn btn-delete">Delete</a></td>   
            </tr>
            <?php } ?>
        </table>
    </div>
    
</body>
</html>