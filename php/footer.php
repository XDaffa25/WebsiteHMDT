<?php
session_start();
$is_logged_in = isset($_SESSION['user_id']);  // sesuaikan key session login kamu
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
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
  </style>
</head>
<footer class="bg-transparent text-gray-800 font-sans">
  <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-center items-start gap-10 px-6 py-10">

    <!-- Quick Links -->
    <div class="flex-1 max-w-xs text-right">
      <h4 class="font-bold mb-4 text-lg">Quick Links</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-blue-600">High Achiever</a></li>
        <li><a href="#" class="hover:text-blue-600">Competition</a></li>
        <li><a href="#" class="hover:text-blue-600">Scholarship</a></li>
      </ul>
    </div>

    <!-- Logo & Socials -->
    <div class="flex flex-col items-center">
      <img src="image/logo.png" alt="HMDT" class="w-20 h-20 rounded-full mb-4">
      <div class="flex space-x-3 mt-2">
        <a href="https://x.com/infohmdt" class="w-9 h-9 flex items-center justify-center rounded-full nav-button">
        <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.youtube.com/@hmdtuniversitastelkom3275" class="w-9 h-9 flex items-center justify-center rounded-full nav-button">
        <i class="fab fa-youtube"></i>
        </a>
        <a href="https://www.instagram.com/infohmdt" class="w-9 h-9 flex items-center justify-center rounded-full nav-button">
        <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.tiktok.com/@infohmdt" class="w-9 h-9 flex items-center justify-center rounded-full nav-button">
        <i class="fab fa-tiktok"></i>
        </a>

      </div>
    </div>

    <!-- Contact Info -->
    <div class="flex-1 max-w-xs text-left">
      <h4 class="font-bold mb-4 text-lg">Contact Info</h4>
      <ul class="space-y-2 text-sm">
        <li><i class="fas fa-phone text-blue-500 mr-2"></i> 081234567890 (Partnership)</li>
        <li><i class="fas fa-comments text-blue-500 mr-2"></i> 081234567890 (Organization & NGO)</li>
        <li><i class="fas fa-envelope text-blue-500 mr-2"></i> hmdt@gmail.com</li>
      </ul>
    </div>

  </div>

  <div class="border-t border-gray-200 text-center text-sm py-4 text-gray-600 font-semibold">
    &copy; 2025 HMDT - All rights reserved.
  </div>
</footer>
</body>
</html>
