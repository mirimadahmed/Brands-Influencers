<?php
session_start();
include 'connection.php.inc';
$bId = $_SESSION['b_id'];
$title = $_POST['review-title'];
$msg = $_POST['review-message'];
$rating = $_POST['rating'];
$in_ID = $_POST['influencer'];
$dt = new DateTime();
$date= $dt->format('Y-m-d');

$sql = "INSERT INTO `influencerreviews`(`ID`, `influencerID`, `brandID`, `title`, `experience`, `rating`, `date`) VALUES ('','$in_ID','$bId','$title','$msg','$rating','$date')";
$query = mysqli_query($con,$sql);
if($query==TRUE) {
header("location:review.php?msg=Review Submitted Successfully");
exit();
}
else {
header("location:review.php?msg=Failed to Submit Review");
exit();
}
?>
