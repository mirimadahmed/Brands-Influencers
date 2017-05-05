<?php
include 'connection.php.inc';
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$re_pass = $_POST['confirm-password'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$country = $_POST['country'];
$expertise;
$audience = $_POST['audience'];
$blog = $_POST['blog'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$insta = $_POST['instagram'];
$pinterest = $_POST['pinterest'];
$youtube = $_POST['youtube'];
$google=$_POST['google'];
$snapchat = $_POST['snapchat'];
$gender = $_POST['Gender'];
$fval ="";
$intro = "";







$fb_likes = $_POST['fb-followers'];
$twitter_followers = $_POST['tw-followers'];
$insta_followers = $_POST['in-followers'];
$pin_followers = $_POST['pn-followers'];
$youtube_subs =  $_POST['yt-followers'];
$google_followers = $_POST['gp-followers'];








if(isset($_POST['expertise']))
{
    $expertise = $_POST['expertise'];
    foreach($expertise as $val) 
    {
        $fval .= $val . " ";
        //echo $fval;
    }
}




$img=$_FILES['image1']['name'];
$tmpname=$_FILES['image1']['tmp_name'];
$pic= time() . '.jpg';
if (is_file($tmpname)) {
    // photo path in our example
    $photo_dest = 'influencerPics/' . $pic;
    // copy the photo from the tmp path to our path
    copy($tmpname, $photo_dest);
}
$img1=$_FILES['logo']['name'];
$tmpname=$_FILES['logo']['tmp_name'];
$pic1= time() . '.jpg';
if (is_file($tmpname)) {
    // photo path in our example
    $photo_dest = 'influencerPics/' . $pic1;
    // copy the photo from the tmp path to our path
    copy($tmpname, $photo_dest);
}
$sqls="SELECT * 
FROM  `influencers` 
WHERE  `Email` LIKE  '$email'";
$res=mysqli_query($con,$sqls);
$num=mysqli_num_rows($res);
if($num==1) {
header("location:register.php?msg=User already exists under given email id");
exit();
}
$sql1 = "SELECT * 
FROM  `influencers` 
WHERE `Phone` LIKE  '$phone'";
$res1=mysqli_query($con,$sql1);
$num1=mysqli_num_rows($res1);
if($num1==1) {
header("location:register.php?msg=User already exists by given phone no.");
exit();
}
if(($pass!=$re_pass) || (strlen($pass) <6)) {
if($pass!=$re_pass) {
header("location:register.php?msg=Password Mismatch");
exit();
}
else if(strlen($pass) <6) {
header("location:register.php?msg=Password should be atleast 6 characters long");
exit();
}
}
else {
$sql = "INSERT INTO `influencers`(`Name`, `Email`, `Password`, `Re-Pass`, `Gender`, `Phone`, `City`, `Country`, `ExpertiseAreas`, `Audience`, `Blog`, `Facebook`, `Twitter`, `Instagram`, `Pinterest`, `Youtube`, `Google`, `SnapChat`, `fb_likes`, `twitter_followers`, `insta_followers`, `pin_followers`, `youtube_subs`, `google_followers`,`intro`) VALUES('$name','$email','$pass','$re_pass', '$gender', '$phone','$city','$country','$fval','$audience','$blog','$facebook','$twitter','$insta','$pinterest','$youtube','$google',
'$snapchat', '$fb_likes', '$twitter_followers', '$insta_followers', '$pin_followers', '$youtube_subs', '$google_followers','$intro')";
$query =mysqli_query($con,$sql);
if($query == TRUE) {
$sqls="SELECT * 
FROM  `influencers` 
WHERE  `Email` LIKE  '$email'";
$querys =mysqli_query($con,$sqls);
$rows=mysqli_fetch_array($querys);
$user_id = $rows['ID'];
$sqlz ="INSERT INTO `influencerpic`(`ID`, `influencerID`, `logo`, `Img1`, `Img2`, `Img3`, `Img4`) VALUES ('',$user_id,'$pic1','$pic','','','')";
$queryz = mysqli_query($con,$sqlz);
header("location:register.php?msg=User Created Successfully");
exit();
}
else {
header("location:register.php?msg=Unable to Register");
exit();
}
}
?>
