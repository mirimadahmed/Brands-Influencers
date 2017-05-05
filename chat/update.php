                  
<?php 
session_start();
include 'connection.php.inc';
$b = $_SESSION['b_id'];
$id = $_GET['id'];
$sql = "SELECT * 
FROM  `chat` 
WHERE  (`i_receiver` ='$id'
AND  `b_sender` ='$b') OR(`b_receiver` ='$b'
AND  `i_sender` ='$id')";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)) {
$msg = $row['message'];
$dt = $row['date'];
$tm = $row ['time'];
$i_receiver = $row['i_receiver'];
$i_sender = $row['i_sender'];
$b_receiver = $row['b_receiver'];
$b_sender = $row['b_sender'];
if($b_sender==$b && $i_receiver==$id) {
//$msg_id=$row['ID'];
$v ="SELECT * FROM  `brands` WHERE  `ID` ='$b'"; 
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
                                    <div class="chat-message right">
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
									if($i_sender==$id && $b_receiver==$b) {
									 $sl = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $qr= mysqli_query($con,$sl);
					   $re= mysqli_fetch_array($qr);
					   $name = $re['Name'];
					   $w = "SELECT * FROM  `influencerpic` WHERE  `InfluencerID` ='$id'";
$r = mysqli_query($con,$w);
$t = mysqli_fetch_array($r);
$pic = $t['logo'];
									?>
									 <div class="chat-message left">
                                        <img class="message-avatar" src="../influencers/influencerPics/<?php echo $pic; ?>" alt="" style="width:50px;height:50px" >
                                        <div class="message">
                                            <a class="message-author" href="#"><?php echo $name;?> </a>
											<span class="message-date"> <?php echo $dt ?>- <?php echo $tm; ?> </span>
                                            <span class="message-content">
											<?php echo $msg; ?>
                                            </span>
                                        </div>
                                    </div>
<?php } } ?>                             
