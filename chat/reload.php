
<?php 
session_start();
include 'connection.php.inc';
$i = $_SESSION['id'];
$id = $_GET['val'];
//echo $bid;
$sql = "SELECT * 
FROM  `chat` 
WHERE  (`i_receiver` ='$i'
AND  `b_sender` ='$id') OR(`b_receiver` ='$id'
AND  `i_sender` ='$i') ";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)) {
$msg = $row['message'];
$dt = $row['date'];
$tm = $row ['time'];
$i_receiver = $row['i_receiver'];
$i_sender = $row['i_sender'];
$b_receiver = $row['b_receiver'];
$b_sender = $row['b_sender'];
if($b_sender==$id && $i_receiver==$i) {
$msg_id=$row['ID'];
$v ="SELECT * FROM  `brands` WHERE  `ID` ='$id'"; 
$n=mysqli_query($con,$v);
$m=mysqli_fetch_array($n);
$name= $m['Name'];
$cover = $m['Cover'];
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
									if($i_sender==$i && $b_receiver==$id) {
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