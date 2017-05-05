<?php
session_start();
include 'connection.php.inc';
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$re_pass = $_POST['confirm-password'];
$gender = $_POST['Gender'];
$intro = $_POST['desc'];
$phone = $_POST['phone'];
$city = $_POST['city'];

$country = $_POST['country'];
$time = $_POST['time'];
$expertise = $_POST['expertise'];
$audience = $_POST['audience'];
$blog = $_POST['blog'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$insta = $_POST['instagram'];
$pinterest = $_POST['pinterest'];
$youtube = $_POST['youtube'];
$google=$_POST['google'];
$snapchat = $_POST['snapchat'];
 $id = $_SESSION['id'];

 $sqlz ="SELECT *  FROM  `influencerpic` WHERE  `influencerID` = '$id'";
 $queryz = mysqli_query($con,$sqlz);
 $res = mysqli_fetch_array($queryz);
 $i_id = $res['ID'];
 $logo = $res['logo'];
 $img1 = $res['Img1'];
 $img2 = $res['Img2'];
 $img3 = $res['Img3'];
 $img4= $res['Img4'];
							
if(empty($_FILES['logo']['name'])) {
$logo_pic=$logo;
}
else {
$img=$_FILES['logo']['name'];
$tmpname=$_FILES['logo']['tmp_name'];
$logo_pic= time() . '.jpg';
if (is_file($tmpname)) {
    // photo path in our example
    $photo_dest = 'influencerPics/' . $logo_pic;
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
    $photo_dest = 'influencerPics/' . $pic1;
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
    $photo_dest = 'influencerPics/' . $pic2;
    // copy the photo from the tmp path to our path
    copy($tmpname, $photo_dest);
}
}

if(empty($_FILES['image3']['name'])) {
$pic3=$img3;
}
else {
$img=$_FILES['image3']['name'];
$tmpname=$_FILES['image3']['tmp_name'];
$pic3= time() . '.jpg';
if (is_file($tmpname)) {
    // photo path in our example
    $photo_dest = 'influencerPics/' . $pic3;
    // copy the photo from the tmp path to our path
    copy($tmpname, $photo_dest);
}
}

if(empty($_FILES['image4']['name'])) {
$pic4=$img4;
}
else {
$img=$_FILES['image4']['name'];
$tmpname=$_FILES['image4']['tmp_name'];
$pic4= time() . '.jpg';
if (is_file($tmpname)) {
    // photo path in our example
    $photo_dest = 'influencerPics/' . $pic4;
    // copy the photo from the tmp path to our path
    copy($tmpname, $photo_dest);
}
}

$fval ="";
foreach($expertise as $val) 
{
$fval .= $val;
$fval.=" ";
}
 $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
 $query= mysqli_query($con,$sql);
$res= mysqli_fetch_array($query);
$areas = $res['ExpertiseAreas'];
$values = explode(' ',$fval);
$list = explode(' ',$areas);
foreach($values as $valz) {
if(!in_array($valz,$list)) {
$areas.=$valz." ";
}
}
if(($pass!=$re_pass) || (strlen($pass) <6)) {
if($pass!=$re_pass) {
header("location:edit_profile.php?msg=Password Mismatch");
exit();
}
else if($pass.length <6) {
header("location:edit_profile.php?msg=Password should be atleast 6 characters long");
exit();
}
}
else {
$sql = "UPDATE `influencers` SET `ID`='$id',`Name`='$name',`Email`='$email',`Password`='$pass',`Re-Pass`='$re_pass', `Gender`='$gender',`intro`='$intro',`Phone`='$phone',
`City`='$city',`Country`='$country',`TimeZone`='$time',
`ExpertiseAreas`='$areas',`Audience`='$audience',`Blog`='$blog',`Facebook`='$facebook',`Twitter`='$twitter',`Instagram`='$insta',`Pinterest`='$pinterest',`Youtube`='$youtube',`Google`='$google',`SnapChat`='$snapchat' WHERE `ID` = '$id' ";
$s = "UPDATE `influencerpic` SET `ID`='$i_id',`influencerID`= '$id', `logo`='$logo_pic',`Img1`='$pic1',`Img2`= '$pic2',`Img3`= '$pic3',`Img4`= '$pic4' WHERE `ID` = '$i_id'";
$query =mysqli_query($con,$sql);
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
