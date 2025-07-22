<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .nav-button {
      background: linear-gradient(90deg, #FFD700 0%, #FFA500 100%);
      border: 2px solid #FFA500;
      color: white;
      transition: all 0.3s ease;
    }
    .nav-button:hover {
      background: white;
      color: #FFA500;
      border-color: 2px solid #FFA500;
    }
    .login-button {
      background: linear-gradient(90deg, #FFD700 0%, #FFA500 100%);
      border: 2px solid #FFA500;
      color: white;
      transition: all 0.3s ease;
    }
    .login-button:hover {
      background: white;
      color: #FFA500;
      border-color: 2px solid #FFA500;
    }
    .nav-link {
      position: relative;
      padding: 8px 0;
      color: #333;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    .nav-link:hover {
      color: #FFA500;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, #FFD700 0%, #FFA500 100%);
      transition: width 0.3s ease;
    }
    .nav-link:hover::after {
      width: 100%;
    }
    .active-link {
      color: #FFA500;
    }
    .active-link::after {
      width: 100%;
    }
  </style>
</head>
<body class="font-sans">

<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-xl py-4 px-6 border-transparent border-transparent">
  <div class="max-w-[1200px] mx-auto flex justify-between items-center">

    <!-- Kiri: Logo -->
    <div class="flex items-center">
      <img src="image/gambar.jpg" alt="Logo HMDT" class="w-12 h-12 rounded-full object-cover mr-3">
      <div>
        <div class="font-bold text-lg">HMDT</div>
        <div class="text-xs text-gray-500">Teknologi Telekomunikasi</div>
      </div>
    </div>

    <!-- Tengah: Menu Desktop -->
    <nav class="hidden md:flex gap-8 items-center">
      <a href="index.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active-link' : '' ?>">Home</a>
      <a href="about.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active-link' : '' ?>">About</a>
      <a href="https://smb.telkomuniversity.ac.id/beasiswa/" target="_blank" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'student-info.php' ? 'active-link' : '' ?>">Student Info</a>
      <a href="https://dte.telkomuniversity.ac.id/" target="_blank" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'articles.php' ? 'active-link' : '' ?>">Articles</a>
      <a href="contact.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active-link' : '' ?>">Contact</a>
    </nav>

    <!-- Kanan: Tombol -->
    <div class="hidden md:flex items-center gap-3">
      <!-- Partnership Button -->
      <a href="partnership.php" class="px-4 py-2 rounded-full font-semibold text-white nav-button">
        Partnership
      </a>
      
      <!-- Visit Store Button -->
      <a href="store.php" class="px-4 py-2 rounded-full font-semibold text-white nav-button">
        Visit Store
      </a>

      <?php if (isset($_SESSION['username'])): ?>
        <div class="relative">
          <button onclick="toggleDropdown()" class="px-4 py-2 rounded-full font-semibold text-white nav-button flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
            </svg>
            <?= htmlspecialchars($_SESSION['username']) ?>
          </button>
          <div id="dropdown-menu" class="absolute top-[110%] right-0 bg-white shadow-lg rounded-lg py-2 flex-col hidden min-w-[150px] z-50">
            <a href="profile.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg>
              Profile
            </a>
            <a href="logout.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
              </svg>
              Logout
            </a>
          </div>
        </div>
      <?php else: ?>
        <a href="login.php" class="px-4 py-2 rounded-full font-semibold login-button">
          Login
        </a>
      <?php endif; ?>
    </div>

    <!-- Mobile Menu Button -->
    <button class="md:hidden flex items-center" onclick="toggleMobileMenu()">
      <svg class="w-8 h-8 text-[#FFA500]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden flex-col gap-4 px-6 pt-4 pb-6">
    <a href="index.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active-link' : '' ?>">Home</a>
    <a href="about.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active-link' : '' ?>">About</a>
    <a href="https://smb.telkomuniversity.ac.id/beasiswa/" target="_blank" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'student-info.php' ? 'active-link' : '' ?>">Student Info</a>
    <a href="https://dte.telkomuniversity.ac.id/" target="_blank" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'articles.php' ? 'active-link' : '' ?>">Articles</a>
    <a href="contact.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active-link' : '' ?>">Contact</a>
    
    <div class="flex flex-col gap-3 mt-4">
      <a href="partnership.php" class="px-4 py-2 rounded-full font-semibold text-white nav-button text-center">
        Partnership
      </a>
      <a href="store.php" class="px-4 py-2 rounded-full font-semibold text-white nav-button text-center">
        Visit Store
      </a>
      
      <?php if (isset($_SESSION['username'])): ?>
        <a href="profile.php" class="px-4 py-2 rounded-full font-semibold text-white nav-button text-center flex items-center justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
          </svg>
          Profile
        </a>
        <a href="logout.php" class="px-4 py-2 rounded-full font-semibold text-white nav-button text-center flex items-center justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
          </svg>
          Logout
        </a>
      <?php else: ?>
        <a href="login.php" class="px-4 py-2 rounded-full font-semibold login-button text-center">
          Login
        </a>
      <?php endif; ?>
    </div>
  </div>

</header>

<!-- Script -->
<script>
function toggleDropdown() {
  const menu = document.getElementById('dropdown-menu');
  menu.classList.toggle('flex');
  menu.classList.toggle('hidden');
}

document.addEventListener('click', function(event) {
  const dropdown = document.querySelector('.relative');
  const menu = document.getElementById('dropdown-menu');
  if (!dropdown.contains(event.target)) {
    menu.classList.remove('flex');
    menu.classList.add('hidden');
  }
});

function toggleMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  mobileMenu.classList.toggle('flex');
  mobileMenu.classList.toggle('hidden');
}

// Highlight active link based on current page
document.addEventListener('DOMContentLoaded', function() {
  const currentPage = window.location.pathname.split('/').pop();
  const navLinks = document.querySelectorAll('.nav-link');
  
  navLinks.forEach(link => {
    const linkPage = link.getAttribute('href');
    if (linkPage === currentPage) {
      link.classList.add('active-link');
    }
  });
});
</script>

</body>
</html>