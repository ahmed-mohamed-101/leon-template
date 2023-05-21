<?php include("connection.php"); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}

if (isset($_POST['add'])) {
  $sql1 = "alter TABLE products AUTO_INCREMENT = 1";
  mysqli_query($con, $sql1);
  $image = mysqli_real_escape_string($con, $_POST['img']);
  $productName = mysqli_real_escape_string($con, $_POST['pn']);
  $description = mysqli_real_escape_string($con, $_POST['des']);

  $sql = "insert into products(image,productName,description) values('$image','$productName','$description')";
  mysqli_query($con, $sql);

  header("Location: adminpage.php");
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
  <br>
  <!-- Start Portfolio -->
  <div class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="special-heading">Admin page</h2>
      <p>you can change what ever you want.</p>
      <!-- start add section -->
      <div class="add-container">
        <form action="adminpage.php" method="POST" class="form-add">
          <input name="img" class="input" type="text" placeholder="image path" required />
          <input name="pn" class="input" type="text" placeholder="product name" required />
          <input name="des" class="input" type="text" placeholder="description" required />
          <button name="add" class="submit" type="submit">Add product</button>
        </form>
      </div>
      <!-- start end section -->
      <div class="portfolio-content">
        <?php
        $query = "select * from products";
        $records = mysqli_query($con, $query);
        //fetch data from database
        while ($data = mysqli_fetch_array($records)) {
          ?>
          <div class="card">
            <img src="<?php echo $data['image']; ?>" alt="" />
            <div class="info">
              <h3>
                <?php echo $data['id']; ?>-
                <?php echo $data['productName']; ?>
              </h3>
              <p>
                <?php echo $data['description']; ?>
              </p>
              <br>
              <div class="links" style="  display: flex; justify-content: space-between;">
                <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
  <!-- End Portfolio -->
</body>

</html>