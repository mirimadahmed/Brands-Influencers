
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <title>Influencer Profile</title>
    <!-- Google Font(s) -->
    <link href="https://fonts.googleapis.com/css?family=Capriola|Roboto" rel="stylesheet">
    <!-- Bootstrap-->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Awesome Icons Font -->
    <link href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Listing Filter -->
    <link href="assets/lib/bootstrap-select-master/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <!-- Lightbox -->
    <link href="assets/lib/lightbox2-master/dist/css/lightbox.min.css" rel="stylesheet">
    <!-- Map -->
    <link href="assets/lib/Leaflet-1.0.2/dist/leaflet.css" rel="stylesheet">
    <!-- City Listing Icons -->
    <link href="assets/fonts/icons/css/import-icons.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv-master/dist/html5shiv.min.js"></script>
      <script src="assets/lib/Respond-master/dest/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript">
	function goToLogin() {
	window.location.href = "login.php";
	}
	</script>
	<script type="text/javascript">
	function goToChat() {
	window.location.href = "../chat/chat_view.php?i=<?php echo $id;?>";
	}
	</script>
  </head>
  <body>
     <!-- Start Body Content Wrapper -->
    <div class="body-wrapper">
      <!-- Start header (topbar) -->
       <?php include 'header.php' ?>
	  
      <!-- End header (topbar) -->
      <!-- Start Login/Register Popup -->
	
    			
      <!-- End Login/Register Popup -->
      <!-- Start Review Popup -->
     
      <!-- End Review Popup -->
      <!-- Start Private Message Popup -->
      <div class="pm-popup container hero-header">
        <div class="row">
    			<div class="col-sm-12 text-center">
    				<div class="panel panel-form">
              <div class="panel-heading">
    						<div class="row">
    							<div class="col-xs-12">
    								<h4>Private Message</h4>
    							</div>
    						</div>
    						<hr>
    					</div>
    					<div class="panel-body">
    						<div class="row">
    							<div class="col-lg-12">
                    <!-- Start Contact Form -->
                    <form method="post" id="pm-form" name="pm-form" class="form-horizontal contact-form pm-form user-form">
                      <!-- Text input-->
                      <div class="form-group">
                        <div class="col-sm-12 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="name" id="name" placeholder="Name" class="form-control"  required>
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="form-group">
                          <div class="col-sm-12 inputGroupContainer">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                              <input name="email" id="email" placeholder="Email (required)" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="form-group">
                          <div class="col-sm-12 inputGroupContainer">
                          <div class="input-group">
                              <textarea name="message" id="message" class="form-control"
                              placeholder="Your Message (required)" required></textarea>
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="form-group">
                          <div class="col-sm-12 inputGroupContainer">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                              <input name="captcha" id="captcha" placeholder="4 + 1 = ?" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <!-- Submit Button -->
                      <div class="form-group sub">
                        <div class="col-sm-12">
                          <button type="submit" name="name" class="btn btn-warning submit" >SUBMIT</button>
                        </div>
                      </div>
                    </form>
                    <!-- End Contact Form-->
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
      </div>
      <!-- End Private Message Popup -->
      <!-- Start Fixed Quick Menu -->
      <div class="quick-menu">
        <a href="#" class="icon-arrow-up hide-menu" title="Hide Quick Menu" data-toggle="tooltip" data-placement="right"></a>
        <a href="#" class="icon-arrow-down hidden show-menu" title="Show Quick Menu" data-toggle="tooltip" data-placement="right"></a>
        <a href="#" class="icon-focus gal" title="Gallery" data-toggle="tooltip" data-placement="right"></a>
        <a href="#" class="icon-copy desc" title="Description" data-toggle="tooltip" data-placement="right"></a>
        <a href="#" class="icon-star rev" title="Reviews" data-toggle="tooltip" data-placement="right"></a>
        <a href="edit_profile.php" target="_blank" class="icon-user-plus" title="Edit Profile" ></a>
       <!-- <a href="#" class="icon-envelope pvt" title="Private Message" data-toggle="tooltip" data-placement="right"></a>-->
      </div>
      <!-- End Fixed Quick Menu -->
      <!-- Start Fixed Pricing Button -->
    
      <!-- End Fixed Pricing Button -->
      <!-- Start Listing Title -->
      <div class="container-fluid listing-title">
        <div class="row text-center">
          <h2>
           <?php 
		   include 'connection.php.inc';
					   $id = $_GET['i_id'];
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $name = $res['Name'];
					  $s = "SELECT * FROM  `influencerreviews` WHERE  `influencerID` ='$id'";
					$query = mysqli_query($con,$s);
					$num = mysqli_num_rows($query);
					$row = mysqli_fetch_array($query);
                       echo $name;?>
            <a href="#" class="listing-item-rating"><?php echo $row['rating'];?></a>
            <span class="rating-count">(<?php echo $num; ?>)</span>
          </h2>
        </div>
        <div class="pg-header-icon icon-focus"></div>
      </div>
      <!-- End Listing Title -->
      <!-- Start Gallery -->
	  <center>
      <div class="container-fluid gallery" id="gal">
	  <?php
	  $sql= "SELECT *  FROM  `influencerpic` WHERE  `InfluencerID` ='$id'";
	    $query= mysqli_query($con,$sql);
	   $res= mysqli_fetch_array($query);
	 $logo_pic = $res['logo'];
	$img1 = $res['Img1'];
	$img2 = $res['Img2'];
	$img3 = $res['Img3'];
	$img4 = $res['Img4'];
	  ?>
        <div class="gallery-item">
          <Img src="../influencers/influencerPics/<?php echo $img1;?>" data-lightbox="gallery">
        </div>
		<?php if(!empty($img2)){?>
        <div class="gallery-item">
         <Img src="../influencers/influencerPics/<?php echo $img2;?>" data-lightbox="gallery">
		 </div>
		<?php } ?>
        <?php if(!empty($img3)){?>
        <div class="gallery-item">
         <Img src="../influencers/influencerPics/<?php echo $img3;?>" data-lightbox="gallery">
		 </div>
		<?php } ?>
		<?php if(!empty($img4)){?>
        <div class="gallery-item">
         <Img src="../influencers/influencerPics/<?php echo $img4;?>" data-lightbox="gallery">
		 </div>
		<?php } ?>
      </div>
	  </center>
      <!-- End Gallery -->
      <!-- Start Listing Description -->
      <div class="container listing-description" id="desc">
        <div class="pg-header-icon icon-copy"></div>
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="listing-avatar">
              <a class="verified-data" title="Verifyed Listing" data-toggle="tooltip" data-placement="right"></a>
              <img alt="" src="../influencers/influencerPics/<?php echo $logo_pic;?>" class="center-block" />
            </div>
		<?php if((isset($_SESSION['b_id'])) && (!empty($_SESSION['b_id'])) ){?>
			<a href="../chat/chat_view.php?i=<?php echo $id;?>">
            <div class="claimed text-center">
              <div class="ribbon">Contact</div>
            </div>
			</a>
			<?php } 
			else {?>
	      <a href="login.php">
            <div class="claimed text-center">
              <div class="ribbon">Contact</div>
            </div>
			</a>
			<?php 
			} 
		?>
            <div class="listing-social">
              <div class="social-networks">
			    <?php include 'connection.php.inc';
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $fb = $res['Facebook'];
                       $twitter = $res['Twitter'];
					   $insta = $res['Instagram'];
					   $pinterest = $res['Pinterest'];
					   $utube = $res['Youtube'];
					   $google = $res['Google'];
					   $snap = $res['SnapChat'];?>
                <a href="http://www.facebook.com/<?php echo $fb;?>" target="_blank" class="fa fa-facebook"></a>
                <a href="http://www.facebook.com/<?php echo $twitter;?>" target="_blank" class="fa fa-twitter"></a>
                <a href="<?php echo $insta;?>" target="_blank" class="fa fa-instagram"></a>
                <a href="<?php echo $pinterest;?>" target="_blank" class="fa fa-pinterest"></a>
				<a href="<?php echo $utube;?>" target="_blank" class="fa fa-youtube"></a>
				<a href="<?php echo $google;?>" target="_blank" class="fa fa-google-plus"></a>
				<a href="<?php echo $snap;?>" target="_blank" class="fa fa-snapchat"></a>
              </div>
            </div>
            <div class="list-data">
              <div class="list-address">
              <?php include 'connection.php.inc';
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $time = $res['TimeZone'];
                       echo $time;?>
              </div>
              <div class="list-phones">
                <div class="list-mobile">
                 <?php include 'connection.php.inc';
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $num = $res['Phone'];
                       echo $num;?>
                </div>
              </div>
              <div class="list-online-data">
                <div class="list-email">
				 <?php include 'connection.php.inc';
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $Email = $res['Email'];
                      ?>
                  <a href="<?php echo $Email;?>">
                  <?php echo $Email;?>
                  </a>
                </div>
                <div class="list-website">
				<?php
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $blog = $res['Blog']; ?>
                  <a href="<?php echo $blog;?>" target="_blank">
                   <?php echo $blog;?>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-9">
            <div>
              <div class="description-container">
                <table class="description-text table">
                  <tr>
                    <td class="description">
                      <h4 class="listing-subtitle text-center">
					  <?php include 'connection.php.inc';
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $name = $res['Name'];
					   $intro = $res['intro'];
                       echo $name;?>
                      </h4>
                      <p class="capitalize-initial">
                      <?php if(!empty($intro)) {
					  echo $intro; } ?>
					  </p>
					  <p><i>
					  <?php
					  if(empty($intro)){
					  echo "No Introduction Provided";
					  }
					  ?>
                     </i></p>
                   
                    </td>
                    
                  </tr>
                </table>
              </div>
              <div class="listing-amenities">
                <h5 class="amenities-title text-left">
                  Expertise Areas
                </h5>
                <div class="amenities tags">
             
                  <?php include 'connection.php.inc';
				  //     <a href="#" class="icon-credit-card">Accepts Credit Cards</a>
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $areas = $res['ExpertiseAreas'];
					   $list = explode(' ',$areas);
					   foreach($list as $val)
					   {
					   if(!empty($val)){?>
					 <a><center> <?php echo $val;?></center></a>
					<?php } }
                      ?>
                </div>
              </div>
              <div class="listing-amenities">
                <h5 class="amenities-title text-left">
                  Target Audience
                </h5>
                <div class="amenities">
				 <?php include 'connection.php.inc';
				  //     <a href="#" class="icon-credit-card">Accepts Credit Cards</a>
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $areas = $res['Audience'];
					   $list = explode(',',$areas);
					   foreach($list as $val)
					   {
					   if(!empty($val)){?>
					   <a href="#" class="icon-users"><center> <?php echo $val;?></center></a>
					<?php } }
                      ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Listing Description -->
      <!-- Start Review -->
      <div class="container listing-review" id="rev">
        <div class="pg-header-icon icon-star"></div>
        <div class="row">
          <div class="col-sm-3 text-center">
		  <?php 
		  $excellent = 0;
		  $good = 0;
		  $regular = 0;
		  $notgood=0;
		  $bad= 0;
		  $f_review="";
		  $s = "SELECT * FROM  `influencerreviews` WHERE  `influencerID` ='$id'";
					$query = mysqli_query($con,$s);
					$num = mysqli_num_rows($query);
					while($row=mysqli_fetch_array($query)) {
					$rating = $row['rating'];
			if($rating == 5){
			$excellent = $excellent +1;
			}
			if($rating == 4){
			$good = $good +1;
			}
			if($rating == 3){
			$regular = $regular +1;
			}
			if($rating == 2){
			$notgood = $notgood +1;
			}
			if($rating == 1){
			$bad = $bad +1;
			}
			}
?>
            <div class="average-review">
			<?php 
			if($excellent>$good && $excellent>$regular && $excellent>$notgood && $excellent>$bad) {
			$f_review ="Excellent"; ?>
              <div class="mood-icon icon-happy"></div>
              <div class="rating">5</div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
			  <?php } ?>
			<?php  if($good>$excellent && $good>$regular && $good>$notgood && $good>$bad) {
			$f_review ="Good"; ?>
              <div class="mood-icon icon-smile"></div>
              <div class="rating">4</div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
			  <?php } ?>
			  <?php  if($regular>$excellent && $regular>$good && $good>$notgood && $good>$bad) {
			  $f_review ="Average"; ?>
              <div class="mood-icon icon-neutral"></div>
              <div class="rating">3</div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
			  <?php } ?>
			  <?php   if($notgood>$excellent && $notgood>$regular && $notgood>$good && $good>$bad) {
			  $f_review ="Not Good"; ?>
              <div class="mood-icon icon-wondering"></div>
              <div class="rating">2</div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
			  <?php } ?>
			  <?php if($bad>$excellent && $bad>$regular && $bad>$notgood && $bad>$good) {
			  $f_review ="Bad"; ?>
              <div class="mood-icon icon-mad"></div>
              <div class="rating">1</div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
			  <?php } ?>
			   <?php if(empty($f_review)) {
			  $f_review ="Not Reviewed"; ?>
              <div class="mood-icon"></div>
              <div class="rating">0</div>
              <div class="stars">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
			  <?php } ?>
              <div class="review-stats">
                <div class="review-counter">
				<?php 
					echo $num;
					?>
					</div>
                <div>Reviews</div>
              </div>
              <img alt="" src="assets/images/miscellaneous/review-background-mask.png" />
            </div>
            <div class="review-reputation text-center">
              <div>
                <h4><?php echo $f_review; ?></h4>
              </div>
            </div>
			
          <div>
		  <br>
              <a href="review.php?i_id=<?php echo $id;?>" class="button">
                Write a Review
              </a>
           </div>
			
          </div>
          <div class="col-sm-9">
            <!-- Start Review Author Block -->
           
            <!-- End Review Author Block -->
            <!-- Start Review Author Block -->
	<?php		  $s = "SELECT * FROM  `influencerreviews` WHERE  `influencerID` ='$id'";
					$query = mysqli_query($con,$s);
					while($row=mysqli_fetch_array($query)) {
					$Brand_id = $row['brandID'];
					$date = $row['date'];
					$vote =$row['rating'];
					$sql ="SELECT *  FROM  `brands` WHERE  `ID` ='$Brand_id'";
					$q = mysqli_query($con,$sql);
					while($res= mysqli_fetch_array($q)) {
					?>
            <div class="row author-block">
              <div class="col-sm-12 text-left">
                <a href="#" class="author-avatar pull-left" style="background-image: url(BrandPics/<?php echo $res['Cover']; ?>)">
                </a>
                <a href="#" class="author-name"><?php echo $res['Name']; ?></a>
               
				<?php
                  if($vote ==5) {?>
				   <div class="author-vote-mood icon-happy"></div>
                <div class="author-vote">
				  Excellent
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
				  </div>
				  <?php } ?>
				 <?php   if($vote ==4) {?>
				  <div class="author-vote-mood icon-smile"></div>
                <div class="author-vote">
				  Good
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
				  </div>
				  <?php } ?>
				  <?php   if($vote ==3) {?>
				   <div class="author-vote-mood icon-neutral"></div>
                <div class="author-vote">
				   Average
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
				  </div>
				  <?php } ?>
				   <?php   if($vote ==2) {?>
				    <div class="author-vote-mood icon-wondering"></div>
                <div class="author-vote">
				   Not Good
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
				  </div>
				  <?php } ?>
				  <?php   if($vote ==1) {?>
				   <div class="author-vote-mood icon-mad"></div>
                <div class="author-vote">
				   Bad
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
				  </div>
				  <?php } ?>
          
				
                <span class="data icon-calendar-full"><?php echo $date;?> </span>
                <div class="clear"></div>
                <div class="author-title">
                 <?php echo $row['title']; ?>
                </div>
                <div class="author-description">
                <?php echo $row ['experience']; ?>
                </div>
              </div>
            </div>
			<?php } } ?>
            <!-- End Review Author Block -->
           
          </div>
        </div>
        
      </div>
      <!-- End Review -->
      <!-- Start Map -->
     
      <!-- End Map -->
      <!-- Start Related Listings -->
      <div class="container-fluid listing-block related" id="rel">
       
       
      
         
          <!-- End Listing Item Col -->
          <!-- Start Listing Item Col -->
       
      
      <!-- End Related Listing -->
      <!-- Start Footer -->
      <footer>
        <div class="row footer-info">
          <div class="footer-col footer-terms">
            <a href="#">Terms of Use</a>
          </div>
          <div class="footer-col footer-privacy">
            <a href="#">Privacy Policy</a>
          </div>
          <div class="footer-col social-networks">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-pinterest"></a>
          </div>
          <div class="footer-col footer-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#" class="sign-in">Sign In</a>
            <a href="#">Pricing</a>
            <a href="#">Blog</a>
            <a href="#">Contact</a>
          </div>
          <div class="footer-col footer-contact">
            <div class="footer-address">
              Your Business Address Here
            </div>
            <div class="footer-contact-data">
              (99) 989-745-9922
            </div>
          </div>
        </div>
        <div class="row footer-logo">
          <a href="#">
            <img alt="" src="assets/images/logo.png"/>
          </a>
        </div>
        <div class="row footer-credits">
          <div class="copyright">
            (C) 2017 Your Company, All right reserved
          </div>
        </div>
      </footer>
      <!-- End Footer -->
    </div>
    <!-- End Body Content Wrapper -->
    <!-- jQuery -->
    <script src="assets/lib/jquery.min.js"></script>
    <script src="assets/lib/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/lib/lightbox2-master/dist/js/lightbox.min.js"></script>
    <!-- Typing Effect -->
    <script src="assets/lib/typed.js-master/dist/typed.min.js"></script>
    <!-- Dragging Scroll to Listing Gallery -->
    <script src="assets/lib/jquery.dragscroll.js"></script>
    <!-- Horizontal Mousewheel Scroll to Listing Gallery -->
    <script src="assets/lib/jquery-mousewheel-master/jquery.mousewheel.min.js"></script>
    <!-- Listing Filter -->
    <script src="assets/lib/bootstrap-select-master/js/bootstrap-select.js"></script>
    <!-- To Self Hosted Hero Video -->
    <script src="assets/lib/bideo.js-master/bideo.js"></script>
    <!-- Map -->
    <script src="assets/lib/Leaflet-1.0.2/build/deps.js"></script>
  	<script src="assets/lib/Leaflet-1.0.2/debug/leaflet-include.js"></script>
    <script src="assets/js/map-markers-samples/sampleMapSingleListingMarker.js"></script>
    <!-- Main Javascript -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
