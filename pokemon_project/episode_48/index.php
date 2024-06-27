<!DOCTYPE html>
  <html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
      <div class="sidebar">
          <?php
          $day = "Friday";
          if ($day == "Monday") {
              echo "Happy Monday!";
          } elseif ($day == "Friday") {
              echo "TGIF!";
          } else {
              echo "Have a nice day!";
          }
          ?>
      </div>
  </body>
  </html>

