<?php
  session_start();
  $_SESSION["username"] = "AdminAfci"; // Simulate a logged-in user
  ?>
<!DOCTYPE html>
  <html>
  <head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
  <body>
  <footer>
  <ul class="nav">
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <?php
          if (isset($_SESSION["username"])) {
              echo '<li><a href="profile.php">Profile</a></li>';
              echo '<li><a href="logout.php">Logout</a></li>';
          } else {
              echo '<li><a href="login.php">Login</a></li>';
              echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
      </ul>
      </footer> 
  </body>
  </html>
