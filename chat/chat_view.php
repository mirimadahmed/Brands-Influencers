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
<script src="http://code.jquery.com/jquery-latest.js"></script>
   <script  type="text/javascript">
   

   $(document).ready(function () {
   var id = $('#influencerID').val() ;
    setInterval(function () {
	    
      $('#chat').load('update.php?id='+id).fadeIn('slow');
	
    }, 3000);
});
</script>
   <script language="javascript">
	function msg_send(){
	var msg = $('#message').val();
	var inf = $('#influencer').val();
	$.ajax({
                type: "POST",
                url: "brand_chat.php" ,
                data: { message: msg , influencer:inf},
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
if(isset($_GET['i']))
 $id = $_GET['i'];
 else
 $id = $_SESSION['inf'];
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $name = $res['Name'];
					    $sql= "SELECT *  FROM  `influencerpic` WHERE  `InfluencerID` ='$id'";
	    $query= mysqli_query($con,$sql);
	   $res= mysqli_fetch_array($query);
	 $logo_pic = $res['logo'];
?>
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
				<input type="hidden" id="influencerID" style="display:none" value="<?php echo $id;?> ">
                            <img alt="image" class="img-circle" src="../influencers/influencerPics/<?php echo $logo_pic;?>" style="height:80px;width:80px" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <a href="../Brands/influencer_profile.php?i_id=<?php echo $id;?>">
					<span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $name;?></strong>
					</span></a>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
          
           
            <li>
                <a ><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="brand_mailbox.php">Inbox</a></li>
                </ul>
            </li>
            
        

            
           
           
    </div>
</nav>

<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
               
            </li>
         <li>
                <a href="../Brands/influencer_profile.php?i_id=<?php echo $id;?>">
                    <i class="fa fa-backward"></i>Go Back
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
                        
                        Your Previous Messages with
					<b>	<?php echo $name;?></b> :
                    </div>


                    <div class="ibox-content">

                        <div class="row">

                            <div class="col-md-9 ">
                                <div class="chat-discussion" id="chat">
<?php 
$b = $_SESSION['b_id'];
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
<?php } } ?>                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="chat-users" style="height:auto">
									<div class="users-list">
								<?php
include 'connection.php.inc';
					   $sql = "SELECT * FROM  `influencers`";
					   $query= mysqli_query($con,$sql);
					   while($res= mysqli_fetch_array($query)) {
					    $name = $res['Name'];
						$ID = $res['ID'];
						if($ID!= $id) {
					    $sql= "SELECT *  FROM  `influencerpic` WHERE  `InfluencerID` ='$ID'";
							$q= mysqli_query($con,$sql);
						   $row= mysqli_fetch_array($q);
						 $logo_pic = $row['logo'];
                            ?>        
						
							
                                        <div class="chat-user">
                                            <img class="chat-avatar" src="../influencers/influencerPics/<?php echo $logo_pic; ?> " alt="" >
                                            <div class="chat-user-name">
                                                <a href="chat_view.php?i=<?php echo $ID?>"><?php echo $name;?></a>
                                            </div>
                                        </div>
										
									<?php }} ?>
								
                                        </div>

</div>
                                 

                                </div>
                            </div>

                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="chat-message-form">

                                    <div class="form-group">
                                      <form method="post" action="javascript:msg_send()">
									  <center><font color="#FF0000"><?php error_reporting(0); echo $_GET['msg']; ?></font></center>
                                        <textarea class="form-control message-input" name="message" id="message" placeholder="Enter message text"></textarea>
										<input type="text" name="influencer" id="influencer" value="<?php echo $id;?>" hidden>
										<input type="submit" name="submit" align="right" class="form-control btn btn-submit">
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
