<?php
include("connection.php");
?>
<?php
$code = $_GET['id'];
$sql = "delete from products where id ='$code'";
$qry1 = mysqli_query($con, $sql);

if ($qry1) {
  mysqli_close($con);
  header("location:adminpage.php");
}else {
    echo "error deleting record!!!";
}
?>