<?php
session_start();
include 'connection.php.inc';
$brand = $_SESSION['b_id'];
$inf = $_POST['influencer'];
$_SESSION['inf']=$inf;
$msg = $_POST['message'];
$dt = new DateTime();
$date= $dt->format('Y-m-d');
$time = $dt->format('H:i:s');
$s = "SELECT * 
FROM  `chat` 
WHERE  `b_sender` ='$brand'
AND  `i_receiver` ='$inf' AND `message` LIKE '$msg' AND `date` = '$date' AND `time` = '$time'";
$q = mysqli_query($con,$s);
$num = mysqli_num_rows($q);
if($num == 0 ) {
if(!empty($msg)) {
$sql="INSERT INTO `chat`(`ID`, `b_sender`, `i_receiver`, `i_sender`, `b_receiver`, `message`, `date`, `time`, `reply_to`) VALUES('', '$brand','$inf','','','$msg','$date','$time','')";
$query = mysqli_query($con,$sql);
if($query==TRUE){
$p ="SELECT * FROM `influencers` WHERE `ID` = '$inf'";
$o = mysqli_query($con,$p);
$u = mysqli_fetch_array($o);
$count = $u['Count'];
$count = $count + 1;
$d= "UPDATE `influencers` SET `Count` = '$count' WHERE `ID` = '$inf'";
$f = mysqli_query($con,$d);
header("location:chat_view.php?msg=Message Sent");
exit();
}
else{
header("location:chat_view.php?msg=Unable to Send Message");
exit();
}
}
}
?>
