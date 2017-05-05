<?php
session_start();
include 'connection.php.inc';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mailbox</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
 
<?php 
$id= $_SESSION['id'];

 $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $name = $res['Name'];
					    $sql= "SELECT *  FROM  `influencerpic` WHERE  `InfluencerID` ='$id'";
	    $query= mysqli_query($con,$sql);
	   $res= mysqli_fetch_array($query);
	 $logo_pic = $res['logo'];
?>
    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../influencers/influencerPics/<?php echo $logo_pic;?>" style="height:80px;width:80px" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $name;?> </strong>
                            
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="../influencers/influencer_profile.php">Profile</a></li>
                        
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
          
           
            <li>
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right"></span></a>
                <ul class="nav nav-second-level collapse">
                    
                </ul>
            </li>
            
      
           
           
    </div>
</nav>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
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

       
            <div class="col-lg-12 animated fadeInRight" style="height:500px;">
            <div class="mail-box-header">

         
                <h2>
				Inbox(
             <?php     $sql= "SELECT * 
FROM  `chat` 
WHERE  `i_receiver` ='$id'";
$q = mysqli_query($con,$sql);
$num =mysqli_num_rows($q);
echo $num; ?> )
                </h2>
                <div class="mail-tools tooltip-demo m-t-md">
                    <div class="btn-group pull-right">
                       <!-- <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                        <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>-->

                    </div>
                   
                </div>
            </div>
                <div class="mail-box" >
              
				<?php
				$previous="";
$sql= "SELECT * 
FROM  `chat` 
WHERE  `i_receiver` ='$id' ORDER BY  `date` DESC ,  `time` DESC ";
$q = mysqli_query($con,$sql);
$counts = 0;
while($r= mysqli_fetch_array($q)) {
$msg = $r['message'];
$date= $r['date'];
$time = $r['time'];
$brand = $r['b_sender'];
$s = "SELECT * FROM  `brands` 
WHERE  `ID` ='$brand'";
$query= mysqli_query($con,$s);
$rez = mysqli_fetch_array($query);
$name = $rez['Name'];
$cover = $rez['Cover'];
if($previous!=$name){
?>
  <table class="table table-hover table-mail">
       
                <tbody>
                <tr class="unread">
                    <td class="check-mail">
                       <img alt="image" class="img-circle" src="../Brands/BrandPics/<?php echo $cover;?>" style="height:80px;width:80px" />
                    </td>
                    <td class="mail-ontact"><a href="influencer_chat.php?bid=<?php echo $brand;?>"><?php echo $name;?> </a></td>
                    <td class="mail-subject"><?php echo $msg; ?></a></td>
                    <td class=""></td>
                    <td class="text-right mail-date"><?php echo $date;?> - <?php echo $time;?></td> 
                </tr>
				</tbody>
                </table>
               <?php } $previous=$name; 
			   $counts++;
			   } ?>
 
                </div>
				
            </div>
			
        </div>
    </div>
<br>
<br>
<br>        <div class="footer fixed">
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

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
