<?php
session_start();
include 'connection.php.inc';
$email = $_POST['email'];
$pass = $_POST['password'];
$sql = "SELECT * 
FROM  `brands` 
WHERE  `email` LIKE  '$email'
AND  `pass` LIKE  '$pass'";
$res = mysqli_query($con,$sql);
$num = mysqli_num_rows($res);
if($num==1){
$row = mysqli_fetch_array($res);
$_SESSION['b_id']=$row['ID'];
header("location:brand_profile.php");
exit();
}
else {
header("location:login.php?msg1=Login Failed");
exit();
}
?>