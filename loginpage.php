<?php
include("connection.php");
?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from users where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: index.php");
    } else {
        echo '<script>
                        window.location.href = "loginpage.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
    }
}
?>

<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="login-container">
        <form action="loginpage.php" method="POST" class="form-login">
            <ul class="login-nav">
                <li class="login-nav__item active">
                    <a href="#">Sign in</a>
                </li>
                <li class="login-nav__item">
                    <a href="http://localhost/leon-website/registrationpage.php">Sign Up</a>
                </li>
            </ul>
            <label for="login-input-user" class="login__label">
                Username
            </label>
            <input id="login-input-user" name="user" class="login__input" type="text" />
            <label for="login-input-user" class="login__label">
                Password
            </label>
            <input id="login-input-password" name="pass" class="login__input" type="password" />
            <button class="login__submit" type="submit" name="login">Sign In</button>
        </form>
        <a href="#" class="login__forgot">Forgot Password?</a>
    </div>

</body>

</html>