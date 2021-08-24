<?php 
include 'include/connect.php';

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$password1 = $_POST['pass1'];
$password2= $_POST['pass2'];

$district = $_POST['district'] ;
$street = $_POST['street'] ;
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];
$additioninfo = $_POST['additionalinfo'];
$homephone = $_POST['phone'];
$mobilephone = $_POST['mobile'];



 $sql = "INSERT INTO `user`(`user_id`, `fname`, `lname`, `email`, `pass1`, `pass2`) VALUES ('','$firstname','$lastname','$email','$password1','$password2')";
 mysqli_query($conn,$sql);

$select = "SELECT user_id from user";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);
$fk_userid = $row['user_id'];                     

 
 $insert = "INSERT INTO `user_address`(`company_id`, `fk_userid`, `district`, `street`, `city`, `state`, `zipcode`, `country`, `additional_info`, `homephone`, `mobilephone`) VALUES ('','$fk_userid','$district','$street','$city','$state','$zipcode','$country','$additioninfo','$homephone','$mobilephone')" ;    
  if(mysqli_query($conn,$insert)== true){
    header("location:index.php");
  }



?>