<?php
session_start();
error_reporting(0); 
include('php/navbar.php'); ?>
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
<?php include("php/footer.php") ?>
</body>
</html>
