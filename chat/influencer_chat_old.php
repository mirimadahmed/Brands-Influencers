<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chat view</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
   <script language="javascript">
	function sendPM(){
	var msg = $('#message').val();
	var inf = $('#influencer').val();
	var br = $('#brand').val();
	$.ajax({
                type: "POST",
                url: "insert_chat.php" ,
                data: { message: msg , influencer:inf, brand:br},
                success : function() { 

                    // here is the code that will run on client side after running clear.php on server

                    // function below reloads current page
                    location.reload();

                }
            });
	}
	</script>

</head>

<body>

<div id="wrapper">

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
		<?php 
include 'connection.php.inc';
if(isset($_GET['b_id']))
 $id = $_GET['b_id'];
 else
 $id = $_SESSION['bid'];
					   $sql = "SELECT * FROM  `brands` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $name = $res['Name'];
					   $cover = $res['Cover'];
?>
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../Brands/BrandPics/<?php echo $cover;?>" style="height:80px;width:80px" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $name;?></strong>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="../influencers/influencer_profile.php">Profile</a></li>
                       
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
          
           
            <li>
                <a href="influencer_mailbox.php"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right"></span></a>
                <ul class="nav nav-second-level collapse">
                </ul>
            </li>
            
        

            
           
           
    </div>
</nav>

<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          
        </div>
        <ul class="nav navbar-top-links navbar-right">
            

            <li>
                <a href="../influencers/influencer_profile.php">
                    <i class="fa fa-backward"></i> Go Back
                </a>
            </li>
        </ul>

    </nav>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Chat view</h2>
        <ol class="breadcrumb">
            <li class="active">
                <strong>Chat view</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">

                    <strong>Chat Room : You can see your Previous Messages below sent to this influencer, and on the right side you can see
					 list of other influencers </strong>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

                <div class="ibox chat-view">

                    <div class="ibox-title">
                        
                        Your Previous Messages
                    </div>


                    <div class="ibox-content">

                        <div class="row">

                            <div class="col-md-9 ">
                                <div class="chat-discussion">
<?php 
$i = $_SESSION['id'];
$sql = "SELECT * 
FROM  `chat` 
WHERE  `receiver` ='$i'
AND  `sender` ='$id'";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)) {
$msg = $row['message'];
$dt = $row['date'];
$tm = $row ['time'];
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
									<?php 
									$d="SELECT  `reply_to` 
FROM  `chat` 
WHERE  `ID` ='$msg_id'";
$f = mysqli_query($con,$d);
while($g = mysqli_fetch_array($f)) {
$reply_id=$g['reply_to'];
if($reply_id!=0){
$response = $g['message'];
$r_dt = $g['date'];
$r_tm = $g['time'];
									 $sl = "SELECT * FROM  `influencers` WHERE  `ID` ='$i'";
					   $qr= mysqli_query($con,$sl);
					   $re= mysqli_fetch_array($qr);
					   $name = $re['Name'];
					   $w = $sql = "SELECT * FROM  `influencerpic` WHERE  `ID` ='$i'";
$r = mysqli_query($con,$w);
$t = mysqli_fetch_array($r);
$pic = $t['logo'];
									?>
									 <div class="chat-message right">
                                        <img class="message-avatar" src="../influencers/influencerPics/<?php echo pic;?>" alt="" style="width:50px;height:50px" >
                                        <div class="message">
                                            <a class="message-author" href="#"><?php echo $name;?> </a>
											<span class="message-date"> <?php echo $r_dt; ?>- <?php echo $r_tm; ?> </span>
                                            <span class="message-content">
											<?php echo $response; ?>
                                            </span>
                                        </div>
                                    </div>
<?php }} } ?>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="chat-users" style="height:auto">
									<div class="users-list">
								<?php
include 'connection.php.inc';
					   $sql = "SELECT * FROM  `brands`";
					   $query= mysqli_query($con,$sql);
					   while($res= mysqli_fetch_array($query)) {
					    $name = $res['Name'];
						$cover = $res['Cover'];
                            ?>        
						
							
                                        <div class="chat-user">
                                            <img class="chat-avatar" src="../Brands/BrandPics/<?php echo $cover; ?> " alt="" >
                                            <div class="chat-user-name">
                                                <a href="#"><?php echo $name;?></a>
                                            </div>
                                        </div>
										
									<?php } ?>
								
                                        </div>

</div>
                                 

                                </div>
                            </div>

                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="chat-message-form">

                                    <div class="form-group">
                                      <form  action="javascript:sendPM()" name="chatform" id="chatform" method="post">
									  <center><font color="#FF0000"><?php error_reporting(0); echo $_GET['msg']; ?></font></center>
                                        <textarea class="form-control message-input" name="message" id="message" placeholder="Enter message text"></textarea>
										<input type="text" name="influencer" id="influencer" value="<?php echo $i;?>" hidden>
										<input type="text" name="brand" id="brand" value="<?php echo $id;?>" hidden>
										<input type="submit" name="submit" align="right" class="form-control btn btn-submit" >
										</form>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
        </div>

    </div>


</div>
<div class="footer" >
    <div class="pull-right">
       
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2017
    </div>
</div>

</div>
    
</div>


<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

</body>

</html>
