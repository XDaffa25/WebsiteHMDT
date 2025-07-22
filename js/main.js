function toggleDropdown() {
  var menu = document.getElementById("dropdown-menu");
  menu.style.display = menu.style.display === "flex" ? "none" : "flex";
}

// Backup plan dengan JavaScript
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 100) {
    navbar.classList.add('sticky-nav');
  } else {
    navbar.classList.remove('sticky-nav');
  }
});