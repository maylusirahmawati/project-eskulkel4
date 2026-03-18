<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hmppg.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Projeck Kel</title>
</head>
<body>
    <header>
         <nav class="navbar">
            <div class="logo">
                <img src="picture/logo.png" alt="">
                <h3>SKILLZONE</h3>
            </div>
            <div class="nav">
                <a href="#about"><i class="bi bi-info-square-fill"></i></i> About Me</a>
                <a href="#ekstrakulikuler"><i class="fa-solid fa-bullseye"></i> Ekstrakulikuler</a>
                <a href="#prestasi"><i class="fa-solid fa-medal"></i>  Prestasi</a>
                <a href="#galeri"><i class="bi bi-camera-fill"></i> Galeri</a>
                <a href="#tutor"><i class="fa-solid fa-chalkboard-user"></i> Tutor</a>
                <a href="#kontak"><i class="bi bi-telephone-fill"></i> Kontak</a>
                <!-- <button class="btn">Kontak</button> -->
            </div>
        </nav>
        <section class="hero">
            <div class="container">
                <div class="flex">
                    <div class="left" style="width: 50%;">
                        <h2>“Ingin berprestasi sekaligus bersenang-senang?</h2>
                        <p>Ekstrakurikuler adalah tempat yang tepat! 🏆<br> Banyak kegiatan, lomba, dan kesempatan emas yang bisa kamu ikuti. Ayo buktikan kemampuanmu, jadilah bagian dari tim hebat, dan ukir prestasi bersama kami!</p>
                        <h3>Yuk, daftarkan dirimu sekarang juga dan jangan lewatkan kesempatan emas ini!”</h3>
                        <div class="button-primary">
                            <a href="loginform.php">Login</a>
                            <?php if(isset($_SESSION['email'])): ?>
                                <a href="logout.php" class="btn-logout">Logout</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="right" style="width: 50%;">
                        <div class="log">
                            <img src="picture/logo home.png" alt="">
                        </div>
                        <div class="persegi"></div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section class="About" id="about">
            <div class="container">
                <div class="flex">
                    <div class="left" style="width: 55%;">
                        <img src="picture/logo.png" alt="">
                    </div>
                
                    <div class="right"style="width: 55%;">
                        <h2>ABOUT</h2>
                        <p>Ekstrakurikuler (Skill Zone) hadir sebagai wadah bagi siswa untuk menyalurkan minat, bakat, dan kreativitas. Di sini, kami percaya bahwa setiap siswa memiliki potensi unik yang perlu dikembangkan melalui kegiatan positif, menyenangkan, dan bermanfaat. Dengan bimbingan pembina yang berpengalaman, ekskul ini tidak hanya mengajarkan keterampilan teknis, tetapi juga menumbuhkan kerja sama, disiplin, dan rasa percaya diri.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="eskul" id="ekstrakulikuler">
            <div class="container">
                <h2>ESKUL</h2>
                <p>Ekstrakulikuler Sekolah</p>
                <div class="eskul-grid">
                    <div class="card">
                        <div class="foto" style="background-image: url('picture/paskib.jpg');">
                            <img src="picture/profil.png" alt="">
                            <h3>PASKIBRA</h3>
                        </div>
                        <div class="card-content">
                            <h4>Pembina: Bpk.Budi</h4>
                            <p>Latihan baris-berbaris, disiplin, dan kesiapan upacara bendera. </p>
                            <?php if(isset($_SESSION['email'])): ?>
                                <button><a href="daftar_form.php">Daftar</a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="foto" style="background-image: url('picture/sains.jpg');">
                            <img src="picture/profil.png" alt="">
                            <h3>SAINS</h3>
                        </div>
                        <div class="card-content">
                            <h4>Pembina: Bpk.Budi</h4>
                            <p>Ekskul riset & eksperimen untuk mengasah logika, metode ilmiah, dan kreativitas sains. </p>
                            <?php if(isset($_SESSION['email'])): ?>
                                <button><a href="daftar_form.php">Daftar</a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="foto" style="background-image: url('picture/basketball.jpg');">
                            <img src="picture/profil.png" alt="">
                            <h3>BASKETBALL</h3>
                        </div>
                        <div class="card-content">
                            <h4>Pembina: Bpk.Budi</h4>
                            <p>Melatih teknik dasar, taktik permainan, sportivitas, kerja sama tim, dan kebugaran fisik. Cocok </p>
                            <?php if(isset($_SESSION['email'])): ?>
                                <button><a href="daftar_form.php">Daftar</a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="foto" style="background-image: url('picture/karate.jpg');">
                            <img src="picture/profil.png" alt="">
                            <h3>KARATE</h3>
                        </div>
                        <div class="card-content">
                            <h4>Pembina: Bpk.Budi</h4>
                            <p>Latihan bela diri, disiplin, kekuatan, dan fokus. </p>
                            <?php if(isset($_SESSION['email'])): ?>
                                <button><a href="daftar_form.php">Daftar</a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="foto" style="background-image: url('picture/vollyball.jpg');">
                            <img src="picture/profil.png" alt="">
                            <h3>VOLLYBALL</a></h3>
                        </div>
                        <div class="card-content">
                            <h4>Pembina: Bpk.Budi</h4>
                            <p>Teknik servis, passing, blocking, dan kerja tim untuk kompetisi. </p>
                            <!-- <button><a href="daftar_form.php">Daftar</a></button> -->
                             <?php if(isset($_SESSION['email'])): ?>
                                <button><a href="daftar_form.php">Daftar</a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="foto" style="background-image: url('picture/pramuka.jpg');">
                            <img src="picture/profil.png" alt="">
                            <h3>PRAMUKA</h3>
                        </div>
                        <div class="card-content">
                            <h4>Pembina: Bpk.Budi</h4>
                            <p>Kegiatan kepanduan: kemandirian, kreativitas luar ruang, survival, dan kepemimpinan. </p>
                            <?php if(isset($_SESSION['email'])): ?>
                                <button><a href="daftar_form.php">Daftar</a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="foto" style="background-image: url('picture/badminton.jpg');">
                            <img src="picture/profil.png" alt="">
                            <h3>BADMINTON</h3>
                        </div>
                        <div class="card-content">
                            <h4>Pembina: Bpk.Budi</h4>
                            <p>Latihan footwork, smash, teknik raket, dan ketahanan fisik.</p>
                            <?php if(isset($_SESSION['email'])): ?>
                                <button><a href="daftar_form.php">Daftar</a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="foto" style="background-image: url('picture/archery.jpg');">
                            <img src="picture/profil.png" alt="">
                            <h3>ARCHERY</h3>
                        </div>
                        <div class="card-content">
                            <h4>Pembina: Bpk.Budi</h4>
                            <p>Teknik menembak, konsentrasi, dan keselamatan alat. Cocok buat yang suka presisi. </p>
                            <?php if(isset($_SESSION['email'])): ?>
                                <button><a href="daftar_form.php">Daftar</a></button>
                            <?php endif; ?>
                        </div>
                    </div>  
                </div>
            </div>
        </section>

        <section class="prestasi" id="prestasi">
            <div class="container">
                <h2>PRESTASI</h2>
            </div>
                <div class="carousel">
                    <div class="group">
                        <div class="cards" style="background-image: url('picture/piala\ \(1\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Paskibra</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\ \(2\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Sains</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\(3\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Basketball</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\ \(4\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Karate</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\ \(5\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Vollyball</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\ \(6\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Pramuka</h3>
                            </div>
                        </div>
                        
                    </div>
                    <div aria-hidden class="group">
                        <div class="cards" style="background-image: url('picture/piala\ \(7\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Badminton</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\(8\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Archery</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\ \(1\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Sains</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\ \(2\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Karate</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\ \(5\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Basket</h3>
                            </div>
                        </div>
                        <div class="cards" style="background-image: url('picture/piala\ \(4\).jpg');">
                            <p><i class="bi bi-trophy-fill" style="color: #A31621;"></i> Juara 1</p>
                            <div class="overlay">
                                <h3>Lomba Volly</h3>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="desk">
                <p>Prestasi ini menjadi bukti bahwa setiap usaha dan kerja keras anggota berbuah hasil yang membanggakan.</p>
            </div>
        </section>

        <section class="galeri" id="galeri">
            <div class="container">
                <h2>GALERI</h2>
            </div>
                <div class="gallery_wrapper">
                    <button class="gallery_button" id="prevBtn">&#10094;</button>
                    <div class="gallery_list" id="galleryList">
                        <div class="gallery_item">
                            <img src="picture/paskibkeg.jpg" class="gallery_img gallery_img--round-left">
                        </div>
                        <div class="gallery_item">
                            <img src="picture/pramukakeg.jpg" class="gallery_img">
                        </div>
                        <div class="gallery_item">
                            <img src="picture/sainkeg.jpg" class="gallery_img gallery_img--round-right">
                        </div>
                        <div class="gallery_item">
                            <img src="picture/karatekeg.jpg" class="gallery_img gallery_img--round-left">
                        </div>
                        <div class="gallery_item">
                            <img src="picture/basketkeg.jpg" class="gallery_img">
                        </div>
                        <div class="gallery_item">
                            <img src="picture/vollykeg.jpg" class="gallery_img gallery_img--round-right">
                        </div>
                        <div class="gallery_item">
                            <img src="picture/archerykeg.jpg" class="gallery_img gallery_img--round-left">
                        </div>
                        <div class="gallery_item">
                            <img src="picture/badminkeg.jpg" class="gallery_img">
                        </div>
                        <div class="gallery_item">
                            <img src="picture/basketkeg.jpg" class="gallery_img gallery_img--round-right">
                        </div>
                    </div>
                    <button class="gallery_button" id="nextBtn">&#10095;</button>
                </div>
        </section>

        <section class="Tutor" id="tutor">
            <div class="container">
                <h2>Tutor</h2>
                <div class="tutor-grid">
                    <div class="card-tutor">
                        <img src="picture/tutor1.png" alt="">
                        <h4>Dimas Ardiansyah</h4>
                        <p>Tugas dan peran</p>
                    </div>
                    <div class="card-tutor">
                        <img src="picture/tutor2.png" alt="">
                        <h4>May Lusi Rahmawati 22</h4>
                        <p>Tugas dan peran</p>
                    </div>
                    <div class="card-tutor">
                        <img src="picture/tutor3.png" alt="">
                        <h4>Nafisah Fauziyah 29</h4>
                        <p>Tugas dan peran</p>
                    </div>
                    <div class="card-tutor">
                        <img src="picture/tutor44.png" alt="">
                        <h4>Ibrahim Isman </h4>
                        <p>Tugas dan peran</p>
                    </div>
                </div>
            </div>
        </section>

    <footer class="kontak" id="kontak">
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer-left">
                    <div class="footer-logo">
                        <img src="picture/logo.png" alt="">
                        <h3>SKILL ZONE <br> <span>Ekstrakulikuler</span></h3>
                    </div>
                    <p>“Asah Bakat, Bentuk Karakter, Ciptakan Masa Depan.”</p>
                    <p>Jl. Pendidikan No. 123, Kecamatan Cendekia, <br> Kota Jakarta Selatan, DKI Jakarta 12540</p>
                </div>

                <div class="footer-links">
                    <div class="footer-col">
                        <ul>
                            <h3>Menu</h3>
                            <li><a href="#"><i class="bi bi-house-door-fill"></i> Home</a></li>
                            <li><a href="#about"><i class="bi bi-info-square-fill"></i> About</a></li>
                            <li><a href="#ekstrakulikuler"><i class="fa-solid fa-bullseye"></i> Ekstrakulikuler</a></li>
                            <li><a href="#prestasi"><i class="fa-solid fa-medal"></i> Prestasi</a></li>
                            <li><a href="#galeri"><i class="bi bi-camera-fill"></i> Galeri</a></li>
                            <li><a href="#tutor"><i class="fa-solid fa-chalkboard-user"></i> Tutor</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <ul>
                            <h3>Hubungi Kami</h3>
                            <li><a href="#"><i class="bi bi-envelope-fill"></i> skillzone.eksakul@gmail.com</a></li>
                            <li><a href="#"><i class="bi bi-telephone-fill"></i> +62 812-3456-7890</a></li>
                            <li><a href="#"><i class="bi bi-whatsapp"></i> https://wa.me/6281234567890</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <ul>
                            <h3>Ikuti Kami</h3>
                            <li><a href="#"><i class="bi bi-instagram"></i> @skillzone.eksakul</a></li>
                            <li><a href="#"><i class="bi bi-youtube"></i> Skill Zone Official</a></li>
                            <li><a href="#"><i class="bi bi-twitter-x"></i> @skillzone_eksul</a></li>
                            <li><a href="#"><i class="bi bi-facebook"></i> Skill Zone Official</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-caption">
            <p>© 2025 Ekstrakurikuler Skill Zone. All rights reserved..</p>
        </div>
    </footer>


    <script src="hmpg.js"></script>
</main>
</body>
</html>