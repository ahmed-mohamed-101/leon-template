<?php
include("connection.php");
?>
<?php
$code = $_GET['id'];
$sql = "select * from products where id ='$code'";
$qry1 = mysqli_query($con, $sql);
$data = mysqli_fetch_array($qry1);

if (isset($_POST['update'])) {
  $image = $_POST['img'];
  $productName = $_POST['pn'];
  $description = $_POST['des'];

  $sql1 = "update products set image='$image',productName='$productName',description='$description' where id='$code'";
  $edit = mysqli_query($con, $sql1);

  if ($edit) {
    mysqli_close($con);
    header("location:adminpage.php");
  } else {
    echo mysqli_connect_error();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>admin page</title>
  <!-- Render All Elements Normally -->
  <link rel="stylesheet" href="css/normalize.css" />
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="css/all.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="css/leon.css" />
  <link rel="stylesheet" href="css/admin.css" />
</head>

<body>
  <!-- Start Header -->
  <div class="header">
    <div class="container">
      <img class="logo" src="images/logo.png" alt="" />
      <div class="links">
        <span class="icon">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <ul>
          <li><a href="http://localhost/leon-website/index.php">Home</a></li>
          <li><a href="http://localhost/leon-website/adminpage.php">Admin</a></li>
          <li><a href="http://localhost/leon-website/registrationpage.php">Sign up</a></li>
          <li><a href="http://localhost/leon-website/loginpage.php">Sign in</a></li>
          <li><a href="http://localhost/leon-website/logoutpage.php">Sign out<i
                class="fa-solid fa-arrow-right-from-bracket" style="float:right;"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Header -->

</body>
<br>
      <!-- start add section -->
      <div class="add-container">
        <form method="POST"  class="form-add">
          <input name="img"  class="input"  type="text" placeholder="image path" required value="<?php echo $data['image']?>"/>
          <input name="pn"   class="input"  type="text" placeholder="product name" required value="<?php echo $data['productName']?>"/>
          <input name="des"  class="input"  type="text" placeholder="description" required value="<?php echo $data['description']?>"/>
          <button name="update" class="submit" type="submit">Edit product</button>
          <!-- <input type="submit" name="update" value="update"> -->
        </form>
      </div>
      <!-- start add section -->
</html>