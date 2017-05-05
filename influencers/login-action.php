<?php
session_start();
include 'connection.php.inc';
$email = $_POST['email'];
$pass = $_POST['password'];
$sql = "SELECT * 
FROM  `influencers` 
WHERE  `Email` LIKE  '$email'
AND  `Password` LIKE  '$pass'";
$res = mysqli_query($con,$sql);
$num = mysqli_num_rows($res);
if($num==1){
$row = mysqli_fetch_array($res);
$_SESSION['id']=$row['ID'];
header("location:influencer_profile.php");
exit();
}
else {
header("location:login.php?msg1=Login Failed");
exit();
}
?>