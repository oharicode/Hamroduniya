<?php 
include '../include/connect.php';

session_start();
   
if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['pass'];




$sql = "INSERT INTO `admin_login`(`username`, `password`) VALUES ('$username','$password')";
mysqli_query($conn,$sql);

$select = "SELECT admin_id from admin_login";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if($count == 1) {
    
  $_SESSION['admin_id'] = $username;
 
  header('Location:index.php'.$_GET['previouspage']);


}else {
  $error = "Your Login Name or Password is invalid";
}
}
?>