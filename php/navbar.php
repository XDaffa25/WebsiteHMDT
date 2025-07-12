<?php session_start(); ?>
<header class="navbar">
  <div class="navbar-container">

    <!-- Kiri: Logo dan Teks -->
    <div class="navbar-left">
      <img src="image/gambar.jpg" alt="Logo HMDT" class="logo">
      <div class="logo-text">
        <div class="title">HMDT</div>
        <div class="subtitle">Teknik Telekomunikasi</div>
      </div>
    </div>

    <!-- Tengah: Navigasi -->
    <nav class="navbar-nav">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="https://smb.telkomuniversity.ac.id/beasiswa/" target="_blank">Student Info</a>
      <a href="https://dte.telkomuniversity.ac.id/" target="_blank">Articles</a>
      <a href="contact.php" target="_blank">Contact</a>
      <a href="" target="_blank">Pengumuman</a>
    </nav>

    <!-- Kanan: Tombol dan Login -->
    <div class="navbar-right">
      <button class="btn">Partnership</button>
      <a href="https://www.instagram.com/direct/t/17844163338490284" class="btn" target="_blank">Visit Store</a>

      <?php if (isset($_SESSION['username'])): ?>
        <div class="dropdown">
          <button onclick="toggleDropdown()" class="btn dropdown-toggle">
            Hi, <?= htmlspecialchars($_SESSION['username']) ?>
          </button>
          <div id="dropdown-menu" class="dropdown-menu">
            <a href="php/profile.php">Profile</a>
            <a href="php/logout.php">LogOut</a>
          </div>
        </div>
      <?php else: ?>
        <a href="php/login.php" class="btn btn-outline-secondary">Login</a>
      <?php endif; ?>
    </div>

  </div>
</header>

<!-- Script untuk toggle dropdown -->
<script>
  function toggleDropdown() {
    const menu = document.getElementById('dropdown-menu');
    menu.classList.toggle('show');
  }

  document.addEventListener('click', function(event) {
    const dropdown = document.querySelector('.dropdown');
    const menu = document.getElementById('dropdown-menu');
    if (!dropdown.contains(event.target)) {
      menu.classList.remove('show');
    }
  });
</script>
