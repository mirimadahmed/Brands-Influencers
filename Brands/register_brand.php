<?php
include 'connection.php.inc';
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$re_pass = $_POST['confirm-password'];
$city = $_POST['city'];
$country = $_POST['country'];
$intro = $_POST['intro'];
$desc = $_POST['desc'];
$slogan = $_POST['slogan'];
$type = $_POST['type'];
$img=$_FILES['cover']['name'];
$tmpname=$_FILES['cover']['tmp_name'];
$pic= time() . '.jpg';
if (is_file($tmpname)) {
    // photo path in our example
    $photo_dest = 'BrandPics/' . $pic;
    // copy the photo from the tmp path to our path
    copy($tmpname, $photo_dest);
}
$sqls="SELECT * 
FROM  `brands` 
WHERE  `email` LIKE  '$email'";
$res=mysqli_query($con,$sqls);
$num=mysqli_num_rows($res);
if($num==1) {
header("location:register.php?msg=Brand already exists under given email id");
exit();
}
if(($pass!=$re_pass) || (strlen($pass) <6)) {
if($pass!=$re_pass) {
header("location:register.php?msg=Password Mismatch");
exit();
}
else if($pass.length <6) {
header("location:register.php?msg=Password should be atleast 6 characters long");
exit();
}
}
else {
$sql = "INSERT INTO `brands`(`ID`, `Name`, `email`, `pass`, `re-pass`, `City`, `Country` ,`Intro`, `Desc`, `Slogan`, `Cover`, `Type`, `Count`) VALUES ('','$name','$email','$pass','$re_pass','$city', '$country', '$intro','$desc','$slogan','$pic','$type',0)";
$query =mysqli_query($con,$sql);
if($query == TRUE) {
header("location:register.php?msg=Brand Created Successfully");
exit();
}
else {
header("location:register.php?msg=Unable to Register");
exit();
}
}
?>
