<?php
session_start();
$_SESSION["username"] = "AdminAfci"; // Simulate a logged-in user
$_SESSION["email"] = "admin-afci@gmail.com"; // Simulate a logged-in user email
?>
<!DOCTYPE html>
  <html>
  <head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
      <h2>My Profil</h2>
      <p>
      <img src="avatar.jpg" width="50">
      </p>
      <main> 
        <p>Username: <?php echo $_SESSION["username"]; ?></p>
        <p>Email: <?php echo $_SESSION["email"]; ?></p>
      </main>
  </body>
  </html>