<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <title>City Listing - Directory Template</title>
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
  </head>
  <body>
    <!-- Start Body Content Wrapper -->
    <div class="body-wrapper">
      <!-- Start header (topbar) -->
      
      <?php include 'header.php';
	 ?>
      <!-- End header (topbar) -->
      <!-- Start Search Popup -->
    
         
      <!-- End Search Popup -->
      <!-- Start Login/Register Popup -->
      
      <!-- Start Page Header -->
	  <?php 
	     include 'connection.php.inc';
		  if(isset($_GET['b_id']))
			 $bid = $_GET['b_id'];
		  else if (isset($_SESSION['bid']))
		   $bid = $_SESSION['bid'];
					   $sql = "SELECT * FROM  `brands` WHERE  `ID` ='$bid'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $name = $res['Name'];
					   $intro = $res['Intro'];
					   $desc = $res['Desc'];
					   $slogan = $res['Slogan'];
					   $cover = $res['Cover'];
					   $count = $res['Count'];
					   $count = $count + 1;
				$update_query = "UPDATE `brands` SET `Count`= '$count' WHERE `ID` = '$bid'";
				mysqli_query($con,$update_query);
                       ?>
			
      <div class="container-fluid pg-header" style="background-image: url(../Brands/BrandPics/<?php echo $cover;?>);">
        <div class="pg-header-content">
          <h1 class="pg-title">
        <?php    echo $name; ?>
          </h1>
        </div>
        <div class="pg-header-icon icon-reminder"></div>
      </div>
      <!-- End Page Header -->
      <!-- Start Single Blog Content -->
      <div class="container-fluid blog single-block">
        <div class="row">
          <!-- Start Single Content -->
          <div class="col-md-9 text-center">
            <div class="post-content margin-top text-justify">
			
			
              <p>
               <?php echo $intro; ?>
              </p>
              <?php 
			  if(!empty($slogan)) { ?>
              <blockquote>
               <?php echo $slogan; ?>
              </blockquote>
			  <?php } 
			  else {
			  ?>
			   <blockquote>
              <i> No Slogan Provided </i>
              </blockquote>
			  <?php } ?>
			   <?php
	  $sql= "SELECT *  FROM  `brandpics` WHERE  `Brand_id` ='$bid'";
	    $query= mysqli_query($con,$sql);
	   $res= mysqli_fetch_array($query);
	$img1 = $res['Img1'];
	$img2 = $res['Img2'];
	if(!empty($img1)) {
	  ?>
              <p>
                <a href="../Brands/BrandPics/<?php echo $img1; ?>" data-lightbox="gallery">
                  <img alt="" src="../Brands/BrandPics/<?php echo $img1; ?>" class="pull-left thumbnail" style="width:250px;height:250px"/>
                </a>			
			
  <?php  }
  else {
  ?>
  
				<?php }
  echo $desc; ?>
              </p>
       <?php if(!empty($img2)) {    ?>
              <p class="clearfix"></p>
              <p>
                <a href="../Brands/BrandPics/<?php echo $img2;?>" data-lightbox="gallery">
                  <img alt="" src="../Brands/BrandPics/<?php echo $img2;?>" class="pull-right thumbnail" style="width:250px;height:250px"/>
                </a>
              <?php } 
			 else { ?>
			 
				<?php } ?>
              </p>
              <p>
              <p class="separator-short"></p>
            </div>
			<br>
			<br>
            <div class="iconized-separator">
              <div class="mask"></div>
              <span><i class="fa fa-star-half-empty"></i></span>
            </div>
            <!-- Start Author Block -->
            
            <!-- End Author Block -->
            <!-- Start Comments -->
            <div class="comments-container comm">
			<?php 
			include 'connection.php.inc';
			$a= "SELECT * 
FROM  `brandreviews` 
WHERE  `brandID` = '$bid'";
$res= mysqli_query($con,$a);
$num = mysqli_num_rows($res);
?>
              <h2 class="scheme-color"><?php echo $num; 
			  if($num==1) { ?> Comment <?php } else {?> Comments <?php }?></h2>
              <ul id="comments-list" class="comments-list">
                <li>
                  
				  <?php while($row= mysqli_fetch_array($res)) { 
				   $inf_id = $row['influencerID'];
				   $comnt = $row['comment'];
				   $r = "SELECT * 
FROM  `influencerpic` 
WHERE  `influencerID` = '$inf_id' ";
$t = mysqli_query($con,$r);
$u = mysqli_fetch_array($t);
 $r = "SELECT * 
FROM  `influencers` 
WHERE  `ID` = '$inf_id' ";
$z = mysqli_query($con,$r);
$x = mysqli_fetch_array($z);
				   ?>
				   <div class="comment-main-level">
                    <a href="#" class="comment-avatar"><img alt="" src="influencerPics/<?php echo $u['logo']; ?>"></a>
                    <div class="comment-box">
                      <div class="comment-head">
                        <h6 class="comment-name"><a href="#"><?php echo $x['Name'];?></a></h6>
                        <span><?php echo $row['date'];?></span>
                        
                      </div>
                      <div class="comment-content">
                       <?php echo $comnt;?>
                      </div>
                    </div>
                  </div>
                 <?php } ?>
                </li>
              
              </ul>
            </div>
            <div class="container-fluid feedback">
              <h2 class="scheme-color">Feedback</h2>
            </div>
            <div class="col-sm-12">
              <!--Start Comment Form -->
			
              <div class="comment-form">
                <div class="login-container">
                  <form method="post" id="contact" name="contact" class="form-horizontal contact-form" action="feedback_action.php">
                   <center><font color="#FF0000"><?php error_reporting(0); echo $_GET['msg']; ?></font></center>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-12 inputGroupContainer">
                        <div class="input-group">
                            <textarea name="comment" id="message" class="form-control"
                            placeholder="Your Comment (required)" required></textarea>
							<input type="hidden" name="brand" value="<?php echo $bid;?>">
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                   
                    <!-- Submit Button -->
                    <div class="form-group sub">
                      <div class="col-sm-12">
                        <button type="submit" name="name" class="btn btn-warning submit" >SUBMIT</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!--End Comment Form-->
            </div>
          </div>
          <!-- End Single Content -->
          <!-- Start Sidebar -->
               <div class="col-md-3 sidebar-right">
            <div class="widget-area">
			<form method="post" id="filters" action="brand_search.php">
              <!--Start Widget Container-->
              <div class="widget-container">
			    <div class="widget news-archive"> <!--start widget-->
                  <div class="block">
                    <div class="widget-title">
                      <div class="the-title">
					  <?php if((isset($_SESSION['id'])) && (!empty($_SESSION['id'])) ) {?>
                       <a href="../chat/influencer_chat.php?bid=<?php echo $bid;?>"><center><i class="fa fa-envelope"></i> <span class="nav-label">Message </span></center></a>
					  <?php }
					  else { ?>
					   <a href="login.php"><center><i class="fa fa-envelope"></i> <span class="nav-label">Message </span></center></a>
					   <?php } ?>
                      </div>
                    </div>
					</div>
					</div>
                <!--Start Widget-->
                <div class="widget news-archive"> <!--start widget-->
                  <div class="block">
                    <div class="widget-title">
                      <div class="the-title">
                        CITIES
                      </div>
                    </div>
					
                    <div class="widget-content">
                    <ul>
                        <li class="item">
						<center>
                        <select name="city" class="form-control">
						 <option value = "None">None </option>
						 <option value="Bangkok">Bangkok</option>
						 <option value="London">London </option>
						 <option value="Islamabad">Islamabad</option>
						 <option value="Karachi">Karachi</option>
						  <option value="Paris">Paris</option>
						  <option value="NewYork">NewYork</option>
						   <option value="Singapore">Singapore</option>
						    <option value="KualaLampur">KualaLampur</option>
							 <option value="Istanbul">Istanbul</option>
							 <option value="Tokyo">Tokyo</option>
							  <option value="London">London</option>
							   <option value="Seoul">Seoul</option>
							    <option value="HongKong">HongKong</option>
							<option value="Barcelona">Barcelona</option>
							 <option value="Toronto">Toronto</option>
							  <option value="Amsterdam">Amsterdam</option>
							   <option value="Milan">Milan</option>
							    <option value="Rome">Rome</option>
								 <option value="Osaka">Osaka</option>
								  <option value="Shanghai">Shanghai</option>
											</select>
						  </center>
					</li>
					</ul>	
                    </div>
                  </div>
                </div>
                <!--End Widget-->
                <!--Start Widget-->
                <div class="widget news-categories"> <!--start widget-->
                  <div class="block">
                    <div class="widget-title">
                      <div class="the-title">
                        COUNTRIES
                      </div>
                    </div>
                    <div class="widget-content">
                      <ul>
                        <li class="item">
						<center>
						<select name="country" class="form-control">
						<option value="none">None </option>
						<option value="Pakistan"> Pakistan </option>
						<option value="France"> France </option>
						<option value="Canada"> Canada</option>
						<option value="UnitedStates">United States</option>
						<option value="China">China</option>
						<option value="Spain">Spain</option>
						<option value="Italy">Italy</option>
						<option value="Turkey">Turkey</option>
						<option value="UnitedKingdom">United Kingdom</option>
						<option value="Germany">Germany</option>
						<option value="Russia">Russia</option>
						<option value="Malasyia">Malaysia</option>
						<option value="Mexiico">Mexico</option>
						<option value="Austria">Austria</option>
						<option value="Australia">Australia</option>
						<option value="Argentina">Argentina</option>
						<option value="Brazil">Brazil</option>
						<option value="Sweden">Sweden</option>
						<option value="Norway">Norway</option>
						<option value="Ukraine">Ukraine</option>
						<option value="Thailand">Thailand</option>
						<option value="SaudiArabia">Saudi Arabia</option>
						<option value="Greece">Greece</option>
						<option value="Poland">Poland</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Singapore">Singapore</option>
						<option value="Hungary">Hungary</option>
						<option value="Croatia">Croatia</option>
						<option value="Korea">Korea</option>
						<option value="Egypt">Egypt</option>
						<option value="Morocco">Morocco</option>
						<option value="CzechRepublic">Czech Republic</option>
						<option value="Switzerland">Switzerland</option>
						<option value="SouthAfrica">South Africa</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Ireland">Ireland</option>
						<option value="Romania">Romania</option>
						<option value="Belgium">Belgium</option>
						<option value="Portugal">Portugal</option>
						<option value="Bahrian">Bahrain</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="India">India</option>
						<option value="Japan">Japan</option>
						<option value="Vietnam">Vietnam</option>
						</select>
                         </center>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--End Widget-->
                <!--Start Widget-->
              <div class="widget news-categories"> <!--start widget-->
                  <div class="block">
                    <div class="widget-title">
                      <div class="the-title">
                        CATEGORIES
                      </div>
                    </div>
                    <div class="widget-content">
                      <ul>
                        <li class="item">
						<center>
						<select name="areas" class="form-control">
						<option value="none">None </option>
					<option value="food">Food</option>
                <option value="fashion">Fashion
               <option value="beauty">Beauty
                <option value="travel">Travel
              <option value="music">Music
                <option value="car">Car
				<option value="wedding">Wedding
                <option value="photography">Photography
                <option value="health">Health
                <option value="technology">Technology
                <option value="movies">Movies
                <option value="realestate">Real Estate
                <option value="law">Law
                <option value="politics">Politics
                <option value="sports">Sports
                <option value="lifestyle">Lifestyle
                <option value="science">Science
                <option value="pets">Pets
               <option value="business">Business
                <option value="fitness">Fitness
                <option value="gaming">Gaming
				<option value="finance">Finance
				<option value="marketing">Marketing
						</select>
                         </center>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--End Widget-->
                <!--End Widget-->
				 <!--Start Widget-->
              <div class="widget news-categories"> <!--start widget-->
                  <div class="block">
                    <div class="widget-content">
                      <ul>
                        <li class="item">
						<center>
						<input type="submit" class="form-control">
                         </center>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
			  </form>
              <!--End Widget Container-->
            </div>
          </div>
          <!-- End Sidebar -->
        </div>
      </div>
      <!-- End Single Blog Content -->
      <!-- Start Related Articles -->
      <div class="container-fluid">
        <h2>Related Brands</h2>
        <div class="separator-medium"></div>
        <div class="row listing white">
          <!-- Start Blog Item Col -->
		  <?php include 'connection.php.inc';
		    $sql = "SELECT * FROM  `brands` WHERE  `ID` ='$bid'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $type = $res['Type'];
		   $sql = "SELECT * FROM  `brands` WHERE  `Type` ='$type' LIMIT 0,4";
					   $q= mysqli_query($con,$sql);
					   $cn =mysqli_num_rows($q);
				if($cn == 0) { ?>
				 <div class="col-sm-12" style="font color:#FF0000">
          
				 No Related Brands Found 
				 </div><?php }
				 else {
				 while($rows= mysqli_fetch_array($q)) {
				 $ID = $rows['ID'];
				 if($bid != $ID) {
					   ?>
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="brand_profile.php?b_id=<?php echo $ID; ?>" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                   <?php echo $rows['Name']; ?>
                  </div>
                </div>
                <img alt="" src="../Brands/BrandPics/<?php echo $rows['Cover'];?>" style="height:250px;width:250px"/>
              </a>
              <div class="listing-item-data">
                <div class="listing-item-excerpt">
               <?php echo $rows['City'].', '.$rows['Country']; ?>
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#"><?php echo $rows['Type'];?></a>
              </div>
            </div>
          </div>
		  <?php }} }?>
          <!-- End Blog Item Col -->
         
          <!-- End Blog Item Col -->
        </div>
      </div>
      <div class="separator-short"></div>
      <!-- End Related Article -->
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
