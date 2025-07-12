<?php
session_start();
error_reporting(0); 
include('php/navbar.php'); // Navbar dimasukkan dari file terpisah
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>About</title>
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- Navbar sudah ditampilkan melalui include('php/navbar.php') -->

<section class="about-section">
  <div class="about-header">
    <h1>About</h1>
    <p>We aim to be active, responsive, and constructive through <br>various actions, devotions, and services.</p>
  </div>

  <div class="about-content">
    <div class="about-left">
      <h5 class="highlight">WHO WE ARE</h5>
      <h2 class="title"><i class="fas fa-arrow-up-right-dots"></i> Our Vision</h2>
      <p class="description">
       Menjadi program vokasi unggul dalam riset terapan dan kewirausahaan pada tahun 2028 yang berperan aktif dalam pengembangan teknologi terapan di bidang Telekomunikasi Digital      </p>

      <h2 class="title"><i class="fas fa-bullseye"></i> Our Mission</h2>
      <ul class="mission-list">
          <li>➤ Mengembangkan dan menyelenggarakan pendidikan vokasi berstandar Internasional di bidang Teknologi Telekomunikasi dan menghasilkan lulusan yang mampu mengembangkan profesionalisme dalam bidang Telekomunikasi Digital.</li>
          <li>➤ Mengembangkan, menghasilkan, menyebarluaskan, dan menerapkan teknologi dan inovasi terapan di bidang Teknologi Telekomunikasi Digital pada industri berstandar Internasional.</li>
          <li>➤ Mengembangkan kerjasama dengan industri dan masyarakat nasional dan internasional.</li>
          <li>➤ Mengembangkan keterampilan untuk menjadi technopreneur yang mampu mengembangkan usaha secara mandiri di bidang Telekomunikasi.</li>
      </ul>
    </div>

    <div class="about-right">
      <img src="image/Anggota.jpg" alt="Anggota HMDT" class="about-image">
      <div class="badge">
        <p class="year">2025</p>
        <p class="org">HMDT</p>
      </div>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="footer-container">
    
    <!-- Quick Links -->
    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#">High Achiever</a></li>
        <li><a href="#">Competition</a></li>
        <li><a href="#">Scholarship</a></li>
      </ul>
    </div>

    <!-- Logo & Socials -->
    <div class="footer-section center">
      <img src="image/logo.png" alt="HMDT" class="footer-logo">
      <div class="social-icons">
        <a href="https://x.com/infohmdt" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/@hmdtuniversitastelkom3275" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://www.instagram.com/infohmdt?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.tiktok.com/@infohmdt_?is_from_webapp=1&sender_device=pc" target="_blank"s><i class="fab fa-tiktok"></i></a>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="footer-section">
      <h4>Contact Info</h4>
      <ul>
        <li><i class="fas fa-phone"></i> 081234567890 (Partnership)</li>
        <li><i class="fas fa-comments"></i> 081234567890 (Organization & NGO)</li>
        <li><i class="fas fa-envelope"></i> hmdt@gmail.com</li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 HMDT - All rights reserved.</p>
  </div>
</footer>

</body>
</html>
