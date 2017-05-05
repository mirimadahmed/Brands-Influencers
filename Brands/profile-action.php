<?php
session_start();
include 'connection.php.inc';
$name = $_POST['bname'];
$email = $_POST['bemail'];
$pass = $_POST['password'];
$re_pass = $_POST['confirm-password'];
$city = $_POST['city'];
$country = $_POST['country'];
$intro = $_POST['intro'];
$desc = $_POST['desc'];
$slogan = $_POST['slogan'];
$type = $_POST['type'];
 $id = $_SESSION['b_id'];
 
 
  $sqls ="SELECT *  FROM  `brands` WHERE  `ID` = '$id'";
 $querys = mysqli_query($con,$sqls);
 $rez = mysqli_fetch_array($querys);
 $cover = $rez['Cover'];
 $count = $rez['Count'];
 if($city=="None")
 $city = $rez['City'];
 if(empty($country))
 $country = $rez['Country'];
 $sqlz ="SELECT *  FROM  `brandpics` WHERE  `Brand_id` = '$id'";
 $queryz = mysqli_query($con,$sqlz);
 $res = mysqli_fetch_array($queryz);
 $r_id = $res['ID'];
 $img1 = $res['Img1'];
 $img2 = $res['Img2'];
									 
if(empty($_FILES['cover']['name'])) {
$pic=$cover;
}
else {
$img=$_FILES['cover']['name'];
$tmpname=$_FILES['cover']['tmp_name'];
$pic= time() . '.jpg';
if (is_file($tmpname)) {
    // photo path in our example
    $photo_dest = 'BrandPics/' . $pic;
    // copy the photo from the tmp path to our path
    copy($tmpname, $photo_dest);
}
}

if(empty($_FILES['image1']['name'])) {
$pic1=$img1;
}
else {
$img=$_FILES['image1']['name'];
$tmpname=$_FILES['image1']['tmp_name'];
$pic1= time() . '.jpg';
if (is_file($tmpname)) {
    // photo path in our example
    $photo_dest = 'BrandPics/' . $pic1;
    // copy the photo from the tmp path to our path
    copy($tmpname, $photo_dest);
}
}

if(empty($_FILES['image2']['name'])) {
$pic2=$img2;
}
else {
$img=$_FILES['image2']['name'];
$tmpname=$_FILES['image2']['tmp_name'];
$pic2= time() . '.jpg';
if (is_file($tmpname)) {
    // photo path in our example
    $photo_dest = 'BrandPics/' . $pic2;
    // copy the photo from the tmp path to our path
    copy($tmpname, $photo_dest);
}
}

if(($pass!=$re_pass) || (strlen($pass) <6)) {
if($pass!=$re_pass) {
header("location:edit_profile.php?msg=Password Mismatch");
exit();
}
else if((strlen($pass)<6)) {
header("location:edit_profile.php?msg=Password should be atleast 6 characters long");
exit();
}
}
else {
$sl = "UPDATE  `brand_influencer`.`brands` SET `ID` = '$id',`Name`='$name',`email`='$email',`pass`='$pass',`re-pass`='$re_pass', `City` = '$city', `Country` = '$country',`Intro`='$intro',`Desc`='$desc',`Slogan`='$slogan',`Cover`='$pic',`Type`= '$type',`Count`= '$count' WHERE  `brands`.`ID`  = '$id'";
//$sl = "UPDATE  `brand_influencer`.`brands` SET  `Type` =  'Hotel' WHERE  `brands`.`ID` =1;";
$query= mysqli_query($con,$sl);
//echo $query;
$s = "UPDATE `brandpics` SET `ID`= '$r_id',`Brand_id`='$id',`Img1`='$pic1',`Img2`= '$pic2' WHERE `ID` = '$r_id'";
$q = mysqli_query($con,$s);
if($query == TRUE && $q == TRUE) {
header("location:edit_profile.php?msg=Profile Updated Successfully");
exit();
}
else {
header("location:edit_profile.php?msg=Unable to Update Profile");
exit();
}
}
?>