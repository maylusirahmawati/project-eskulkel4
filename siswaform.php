<?php
require_once 'db.php';
$sql = "SELECT * FROM registrasi";
$result= $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="siswaformmmm.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="picture/logo.png" alt="">
                <h3><a href="homepage.php">SKILLZONE</a></h3>
            </div>
        </nav>
        <section class="daftar">
            <div class="container">
                <div class="flex">
                    <div class="left" style="width: 55%;">
                        <img src="picture/logsiswa2.png" alt="">
                    </div>
                    <div class="right"style="width: 50%;">
                        <h3>Welcome!</h3>
                        <p>Daftarkan dirimu sekarang dan jadilah bagian dari berbagai kegiatan seru, kreatif, dan penuh pengalaman di sekolah!</p>
                        <form action="siswa.php" method="post" >
                            <label for="nisn">NISN</label>
                            <input type="number" id="nisn" name="nisn" placeholder="Masukkan NISN"> <br>
                            <label for="email">Email</label>
                            <select name="regis_id" id="regis_id">
                                <?php while($registrasi = $result->fetch_assoc()) {?> 
                                <option value="<?=$registrasi['id_regis']?>"><?=$registrasi['email']?></option>
                                <?php } ?>
                            </select> <br>
                            <label for="nama_siswa">Nama Siswa/i</label> 
                            <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Masukkan nama"> <br>
                            <label for="kelas">Kelas</label> 
                            <select name="kelas" required>
                                <option value="11 PPLG 1">11 PPLG 1</option>
                                <option value="11 PPLG 2">11 PPLG 2</option>
                                <option value="11 DKV 1">11 DKV 1</option>
                                <option value="11 DKV 2">11 DKV 2</option>
                                <option value="11 PH 1">11 PH 1</option>
                                <option value="11 PH 2">11 PH 2</option>
                            </select> <br>
                            <label for="jenis_kelamin">Jenis Kelamin</label> 
                            <select name="jenis_kelamin" required>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-laki">Laki-laki</option>
                            </select> <br>
                            <label for="no_tlp">No Tlp</label> 
                            <input type="number" id="no_tlp" name="no_tlp" placeholder="Masukkan no tlp"> <br>
                            <label for="alamat">Alamat</label> 
                            <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat"> <br> 
                            <button>Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </header>

</body>
</html>