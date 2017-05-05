
<?php 
//session_start();
include 'connection.php.inc';
$i = $_SESSION['id'];
$id = $_GET['bid'];
$sql = "SELECT * 
FROM  `chat` 
WHERE  (`receiver` ='$i'
AND  `sender` ='$id') OR(`receiver` ='$id'
AND  `sender` ='$i') ";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)) {
$msg = $row['message'];
$dt = $row['date'];
$tm = $row ['time'];
$receiver = $row['receiver'];
$sender = $row['sender'];
if($sender==$id && $receiver==$i) {
$msg_id=$row['ID'];
$v ="SELECT * FROM  `brands` WHERE  `ID` ='$id'"; 
$n=mysqli_query($con,$v);
$m=mysqli_fetch_array($n);
$name= $m['Name'];
$cover = $m['Cover'];
/*
$w = $sql = "SELECT * FROM  `influencerpic` WHERE  `ID` ='$i'";
$r = mysqli_query($con,$w);
$t = mysqli_fetch_array($r);
$pic = $t['logo'];*/
?>
                                    <div class="chat-message left">
                                        <img class="message-avatar" src="../Brands/BrandPics/<?php echo $cover; ?>" alt="" style="width:50px;height:50px" >
                                        <div class="message">
                                            <a class="message-author" href="#"><?php echo $name;?> </a>
											<span class="message-date"> <?php echo $dt; ?>- <?php echo $tm; ?> </span>
                                            <span class="message-content">
											<?php echo $msg; ?>
                                            </span>
                                        </div>
                                    </div>
									<?php }
									if($sender==$i && $receiver==$id) {
									 $sl = "SELECT * FROM  `influencers` WHERE  `ID` ='$i'";
					   $qr= mysqli_query($con,$sl);
					   $re= mysqli_fetch_array($qr);
					   $name = $re['Name'];
					   $w = "SELECT * FROM  `influencerpic` WHERE  `InfluencerID` ='$i'";
$r = mysqli_query($con,$w);
$t = mysqli_fetch_array($r);
$pic = $t['logo'];
									?>
									 <div class="chat-message right">
                                        <img class="message-avatar" src="../influencers/influencerPics/<?php echo $pic;?>" alt="" style="width:50px;height:50px" >
                                        <div class="message">
                                            <a class="message-author" href="#"><?php echo $name;?> </a>
											<span class="message-date"> <?php echo $dt ?>- <?php echo $tm; ?> </span>
                                            <span class="message-content">
											<?php echo $msg; ?>
                                            </span>
                                        </div>
                                    </div>
<?php } } ?>