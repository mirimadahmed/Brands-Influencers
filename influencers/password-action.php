<?php
include 'connection.php.inc';
$email = $_POST['username'];

$sql= "SELECT * 
FROM  `influencers` 
WHERE  `Email` LIKE  '$email'";
$query = mysqli_query($con,$sql);
$row= mysqli_fetch_array($query);
$password = $row['Password'];
$to = $email;
$subject = "Your Recovered Password";
 
$message = "Please use this password to login: \t" .  $password;
$headers = "From : no-reply.com.com";
if(mail($to, $subject, $message, $headers)){
	header("location:forgot-password.php?msg=Your Password has been sent to your email id");
	exit();
}else{
	header("location:forgot-password.php?msg=Failed to Recover your password, try again");
	exit();
}











?>