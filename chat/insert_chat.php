<?php
session_start();
include 'connection.php.inc';
$brand = $_POST['brand'];
$inf = $_POST['influencer'];
$_SESSION['bid']=$brand;
$msg = $_POST['message'];
$dt = new DateTime();
$date= $dt->format('Y-m-d');
$time = $dt->format('H:i:s');
$s = "SELECT * 
FROM  `chat` 
WHERE  `i_sender` ='$inf'
AND  `b_receiver` ='$brand' AND `message` LIKE '$msg' AND `date` = '$date' AND `time` = '$time'";
$q = mysqli_query($con,$s);
$num = mysqli_num_rows($q);
if($num == 0 ) {
if(!empty($msg)) {
$sql="INSERT INTO `chat`(`ID`, `b_sender`, `i_receiver`, `i_sender`, `b_receiver`, `message`, `date`, `time`, `reply_to`) VALUES('','','', '$inf','$brand','$msg','$date','$time','')";
$query = mysqli_query($con,$sql);
if($query==TRUE){
header("location:influencer_chat.php");
exit();
}
else{
header("location:influncer_chat.php?msg=Unable to Send Messgae");
exit();
}
}
}
?>
