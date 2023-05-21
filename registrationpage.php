<?php include('connection.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_POST['register'])) {
  $sql1 = "alter TABLE products AUTO_INCREMENT = 1";
  mysqli_query($con, $sql1);
  
  $username = mysqli_real_escape_string($con, $_POST['un']);
  $email = mysqli_real_escape_string($con, $_POST['em']);
  $password1 = mysqli_real_escape_string($con, $_POST['pasw1']);
  $password2 = mysqli_real_escape_string($con, $_POST['pasw2']);

  if ($password1 != $password2) {
    echo "password doesn't match";
  } else {
    $sql = "insert into users(username,email,password) values('$username','$email','$password1')";
    mysqli_query($con, $sql);
    header("Location: loginpage.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>google</title>
  <link rel="stylesheet" href="css/registration.css">
</head>

<body>

  <div class="login-container">
    <form action="registrationpage.php" method="POST" class="form-login">
      <ul class="login-nav">
        <li class="login-nav__item active">
          <a href="#">Sign Up</a>
        </li>
        <li class="login-nav__item">
          <a href="http://localhost/leon-website/loginpage.php">Sign in</a>
        </li>
      </ul>
      <label for="login-input-user" class="login__label">
        Username
      </label>
      <input id="login-input-user" name="un" class="login__input" type="text" />
      <label for="login-input-user" class="login__label">
        Email
      </label>
      <input id="login-input-user" name="em" class="login__input" type="email" />
      <label for="login-input-user" class="login__label">
        Password
      </label>
      <input id="login-input-user" name="pasw1" class="login__input" type="password" />
      <label for="login-input-password" class="login__label">
        confirm password
      </label>
      <input id="login-input-password" name="pasw2" class="login__input" type="password" />
      <button class="login__submit" type="submit" name="register">Sign UP</button>
    </form>
  </div>


</body>

</html>