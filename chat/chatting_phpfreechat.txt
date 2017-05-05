<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Chat view</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<!-- http://www.phpfreechat.net/documentation/quickstart.html -->
<script src="phpfreechat-2.1.0/client/lib/jquery-1.8.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="phpfreechat-2.1.0/client/themes/default/jquery.phpfreechat.min.css">
<script src="phpfreechat-2.1.0/client/jquery.phpfreechat.min.js"></script>

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
                            <img alt="image" class="img-circle" src="../influencers/influencerPics/<?php echo $logo_pic;?>" style="height:80px;width:80px" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $name;?></strong>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
          
           
            <li>
                <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="mailbox.html">Inbox</a></li>
                    <li><a href="mail_detail.html">Email view</a></li>
                    <li><a href="mail_compose.html">Compose email</a></li>
                    <li><a href="email_template.html">Email templates</a></li>
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
                <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a7.jpg">
                            </a>
                            <div class="media-body">
                                <small class="pull-right">46h ago</small>
                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a4.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right text-navy">5h ago</small>
                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/profile.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">23h ago</small>
                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="mailbox.html">
                                <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="mailbox.html">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="grid_options.html">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="notifications.html">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>


            <li>
                <a href="login.html">
                    <i class="fa fa-sign-out"></i> Log out
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
                                <div class="chat-discussion" style="height:600px">
								<div id="mychat"><a href="http://www.phpfreechat.net">Creating chat rooms everywhere - phpFreeChat</a></div>
								<script type="text/javascript">
  $('#mychat').phpfreechat({ serverUrl: 'phpfreechat-2.1.0/server' });
</script>
<?php 
$b = $_SESSION['b_id'];
$sql = "SELECT * 
FROM  `brandschat` 
WHERE  `influencerID` ='$id'
AND  `brandID` ='$b'";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)) {
$msg = $row['message'];
$dt = $row['date'];
$tm = $row ['time'];
$msg_id = $row['ID'];
$d="SELECT * 
FROM  `brand_response` 
WHERE  `msgID` ='$msg_id'";
$f = mysqli_query($con,$d);
$g = mysqli_fetch_array($f);
$response = $g['message'];
$r_dt = $g['date'];
$r_tm = $g['time'];
$w = $sql = "SELECT * FROM  `brands` WHERE  `ID` ='$b'";
$r = mysqli_query($con,$w);
$t = mysqli_fetch_array($r);
$name = $t['Name'];
$pic = $t['Cover'];
?>
                                    <div class="chat-message left">
                                        <img class="message-avatar" src="../Brands/BrandPics/<?php echo $pic;?>" alt="" style="width:50px;height:50px" >
                                        <div class="message">
                                            <a class="message-author" href="#"><?php echo $name;?> </a>
											<span class="message-date"> <?php echo $dt; ?>- <?php echo $tm; ?> </span>
                                            <span class="message-content">
											<?php echo $msg; ?>
                                            </span>
                                        </div>
                                    </div>
									<?php if(!empty($response)){
									 $sl = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $qr= mysqli_query($con,$sl);
					   $re= mysqli_fetch_array($qr);
					   $name = $re['Name'];
									?>
									 <div class="chat-message right">
                                        <img class="message-avatar" src="../influencers/influencerPics/<?php echo $logo_pic;?>" alt="" style="width:50px;height:50px" >
                                        <div class="message">
                                            <a class="message-author" href="#"><?php echo $name;?> </a>
											<span class="message-date"> <?php echo $r_dt; ?>- <?php echo $r_tm; ?> </span>
                                            <span class="message-content">
											<?php echo $response; ?>
                                            </span>
                                        </div>
                                    </div>
<?php } } ?>
                                </div>

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
                                                <a href="#"><?php echo $name;?></a>
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
                                      <form method="post" action="brand_chat.php">
									  <center><font color="#FF0000"><?php error_reporting(0); echo $_GET['msg']; ?></font></center>
                                        <textarea class="form-control message-input" name="message" placeholder="Enter message text"></textarea>
										<input type="text" name="influencer" value="<?php echo $id;?>" hidden>
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
        10GB of <strong>250GB</strong> Free.
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
