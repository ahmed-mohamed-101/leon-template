<?php

session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Render All Elements Normally -->
  <link rel="stylesheet" href="css/normalize.css" />
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="css/all.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <!-- css link -->
  <link rel="stylesheet" href="css/logout.css">
</head>

<body>
  <div class="main">
    <p>You have successfully logged out</p>
    <a href="loginpage.php">SIGN IN <i class="fa-solid fa-angles-left"></i></a>
    <a href="registrationpage.php">SIGN UP <i class="fa-solid fa-angles-left"></i></a>
  </div>
</body>

</html>