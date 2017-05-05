<?php
session_start();
include 'connection.php.inc';
if(isset($_SESSION['id'])) {
$in_id = $_SESSION['id'];
$comment = $_POST['comment'];
$b_id = $_POST['brand'];
$dt = new DateTime();
$date= $dt->format('Y-m-d');
$sql ="INSERT INTO `brandreviews`(`Id`, `influencerID`, `brandID`, `comment`, `date`) VALUES ('','$in_id','$b_id','$comment','$date')";
$query = mysqli_query($con,$sql);
if($query==TRUE){
header("location:brand_profile.php?msg=Comment Submitted Sucessfully");
exit();
}
else {
header("location:brand_profile.php?msg=Unable to Submit Comment");
exit();
}
}
else {
header("location:login.php");
}

?>