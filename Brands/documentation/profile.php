<?php
session_start();
?>
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
       <?php include 'header.php' ?>
	  
      <!-- End header (topbar) -->
      <!-- Start Login/Register Popup -->
	
    			
      <!-- End Login/Register Popup -->
      <!-- Start Review Popup -->
      <div class="review-popup container-fluid hero-header">
        <div class="row">
          <div class="col-sm-12 text-center">
    				<div class="panel panel-form">
              <div class="panel-heading">
    						<div class="row">
    							<div class="col-xs-12">
    								<h4>Write a Review</h4>
    							</div>
    						</div>
    						<hr>
    					</div>
    					<div class="panel-body">
    						<div class="row">
    							<div class="col-lg-12">
    								<form id="review-form" class="review-form" action="#" method="post">
    									<div class="form-group">
    										<input type="text" name="review-title" id="review-title" tabindex="1" class="form-control" placeholder="Short Review Title" value="">
    									</div>
    									<div class="form-group">
                        <textarea class="form-control" name="review-message" id="review-message" rows="8" placeholder="Describe your experience"></textarea>
    									</div>
                      <div class="form-group">
                        <div class="star-rating">
                          <fieldset>
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                          </fieldset>
                        </div>
                      </div>
    									<div class="form-group">
    										<input type="submit" name="review-submit" id="review-submit" tabindex="4" class="form-control btn btn-submit" value="Submit Review">
    									</div>
    								</form>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
        </div>
      </div>
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
        <a href="#" class="icon-envelope pvt" title="Private Message" data-toggle="tooltip" data-placement="right"></a>
      </div>
      <!-- End Fixed Quick Menu -->
      <!-- Start Fixed Pricing Button -->
    
      <!-- End Fixed Pricing Button -->
      <!-- Start Listing Title -->
      <div class="container-fluid listing-title">
        <div class="breadcrumbs text-left">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Listings</a></li>
            <li><a href="#">Boston</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Restaurants</a></li>
          </ul>
        </div>
        <div class="row text-center">
          <h2>
           <?php 
		   include 'connection.php.inc';
					   $id = $_SESSION['id'];
					   $sql = "SELECT * FROM  `influencers` WHERE  `ID` ='$id'";
					   $query= mysqli_query($con,$sql);
					   $res= mysqli_fetch_array($query);
					   $name = $res['Name'];
                       echo $name;?>
            <a href="#" class="listing-item-rating">4.3</a>
            <span class="rating-count">(14)</span>
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
	$img1 = $res['Img1'];
	$img2 = $res['Img2'];
	  ?>
        <div class="gallery-item">
          <Img src="influencerPics/<?php echo $img1;?>" data-lightbox="gallery">
        </div>
		<?php if(!empty($img2)){?>
        <div class="gallery-item">
         <Img src="influencerPics/<?php echo $img2;?>" data-lightbox="gallery">
		<?php } ?>
        </div>
		<!--
        <div class="gallery-item">
          <a href="assets/images/single-listing/3.jpg" data-lightbox="gallery" data-title="Our chef preparing some delicious dinner"></a>
        </div>
        <div class="gallery-item">
          <a href="assets/images/single-listing/4.jpg" data-lightbox="gallery" data-title="Salad with fries and Sauce"></a>
        </div>
        <div class="gallery-item">
          <a href="assets/images/single-listing/5.jpg" data-lightbox="gallery" data-title="Gourmet options"></a>
        </div>
        <div class="gallery-item">
          <a href="assets/images/single-listing/6.jpg" data-lightbox="gallery" data-title="Varied menu of wines"></a>
        </div>
        <div class="gallery-item">
          <a href="assets/images/single-listing/7.jpg" data-lightbox="gallery" data-title="Special spinach salad as entry"></a>
        </div>-->
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
              <img alt="" src="assets/images/miscellaneous/demo-logo.png" class="center-block" />
            </div>
            <div class="claimed text-center">
              <div class="ribbon">Claimed</div>
            </div>
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
                <a href="<?php echo $fb;?>" target="_blank" class="fa fa-facebook"></a>
                <a href="<?php echo $twitter;?>" target="_blank" class="fa fa-twitter"></a>
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
              <div class="listing-amenities">
                <h5 class="amenities-title text-left">
                  Tags
                </h5>
                <div class="amenities tags">
                  <a href="#">Lunch</a>
                  <a href="#">Breakfast</a>
                  <a href="#">Bar</a>
                  <a href="#">Pub</a>
                  <a href="#">Drinks</a>
                  <a href="#">Wine</a>
                  <a href="#">Dinner</a>
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
            <div class="average-review">
              <div class="mood-icon icon-happy"></div>
              <div class="rating">4.3</div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="review-stats">
                <div class="review-counter">14</div>
                <div>Reviews</div>
              </div>
              <img alt="" src="assets/images/miscellaneous/review-background-mask.png" />
            </div>
            <div class="review-reputation text-center">
              <div>
                <h4>Excellent</h4>
              </div>
            </div>
            <div class="write-review">
              <a href="#" class="button">
                Write a Review
              </a>
            </div>
          </div>
          <div class="col-sm-9">
            <!-- Start Review Author Block -->
            <div class="row author-block">
              <div class="col-sm-12 text-left">
                <a href="#" class="author-avatar pull-left" style="background-image: url(assets/images/users/1.jpg)">
                  <div class="author-stats">
                    <div class="post-counter">14</div>
                    <div>Reviews</div>
                  </div>
                </a>
                <a href="#" class="author-name">John Doe</a>
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
                <span class="data icon-calendar-full">05/02/2017</span>
                <div class="clear"></div>
                <div class="author-title">
                  Excellent quiet spot for business or meeting a friend
                </div>
                <div class="author-description">
                  The food is excellent. The service is quite good, and the atmosphere is quiet and enjoyable. This is always a place that you can count on for a good meal... of course I wish the portions were larger... but that is a very minor issue, kudos to the service, the meal, and the ambience.
                </div>
              </div>
            </div>
            <!-- End Review Author Block -->
            <!-- Start Review Author Block -->
            <div class="row author-block">
              <div class="col-sm-12 text-left">
                <a href="#" class="author-avatar pull-left" style="background-image: url(assets/images/users/2.jpg)">
                  <div class="author-stats">
                    <div class="post-counter">14</div>
                    <div>Reviews</div>
                  </div>
                </a>
                <a href="#" class="author-name">Maria Doe</a>
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
                <span class="data icon-calendar-full">05/02/2017</span>
                <div class="clear"></div>
                <div class="author-title">
                  Overpriced but pretty and food fine
                </div>
                <div class="author-description">
                  We have eaten on the Bistro a couple of times. The service, food and view are good to very good. Nothing will blow your socks off, but they don't usually disappoint either. Wine list very expensive (AKA overpriced).
                </div>
              </div>
            </div>
            <!-- End Review Author Block -->
            <!-- Start Review Author Block -->
            <div class="row author-block">
              <div class="col-sm-12 text-left">
                <a href="#" class="author-avatar pull-left" style="background-image: url(assets/images/users/3.jpg)">
                  <div class="author-stats">
                    <div class="post-counter">14</div>
                    <div>Reviews</div>
                  </div>
                </a>
                <a href="#" class="author-name">Paul Doe</a>
                <div class="author-vote-mood icon-neutral"></div>
                <div class="author-vote">
                  Regular
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                </div>
                <span class="data icon-calendar-full">05/02/2017</span>
                <div class="clear"></div>
                <div class="author-title">
                  Almost perfect birthday dinner
                </div>
                <div class="author-description">
                  We loved our bay window-side table, and the overall ambiance of the restaurant was elegant, relaxed and warm. Our food was delicious. Roast brussel sprouts with mushrooms and balsamic over a chickpea spread was savory and rich.
                </div>
              </div>
            </div>
            <!-- End Review Author Block -->
            <!-- Start Review Author Block -->
            <div class="row author-block">
              <div class="col-sm-12 text-left">
                <a href="#" class="author-avatar pull-left" style="background-image: url(assets/images/users/4.jpg)">
                  <div class="author-stats">
                    <div class="post-counter">14</div>
                    <div>Reviews</div>
                  </div>
                </a>
                <a href="#" class="author-name">Joane Doe</a>
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
                <span class="data icon-calendar-full">05/02/2017</span>
                <div class="clear"></div>
                <div class="author-title">
                  Good products but non imaginative cuisine. The claimed french touch is discrete
                </div>
                <div class="author-description">
                  Setting is OK. Seating is comfortable and not packed. The wine list is impressive Good products but non imaginative cuisine. The claimed french touch is discrete. Fish was correctly cooked. The catastrophy came with the dessert. My soufflé was served flat!. This is inacceptable in such a place. The manager excuses were as flat as the soufflé. Not professional!
                </div>
              </div>
            </div>
            <!-- End Review Author Block -->
            <!-- Start Review Author Block -->
            <div class="row author-block">
              <div class="col-sm-12 text-left">
                <a href="#" class="author-avatar pull-left" style="background-image: url(assets/images/users/5.jpg)">
                  <div class="author-stats">
                    <div class="post-counter">14</div>
                    <div>Reviews</div>
                  </div>
                </a>
                <a href="#" class="author-name">Lynda Doe</a>
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
                <span class="data icon-calendar-full">05/02/2017</span>
                <div class="clear"></div>
                <div class="author-title">
                  Disappointing and Expensive Dinner
                </div>
                <div class="author-description">
                  I want to preface this review by saying that our waiter Jonathan and the maitre were very nice and tried hard, but they were not in the kitchen and that is where the problems lay. I also want to say that I rarely write such poor reviews but this was a terrible meal.
                </div>
              </div>
            </div>
            <!-- End Review Author Block -->
          </div>
        </div>
        <div class="more-listing icon-plus" title="More Reviews" data-toggle="tooltip" data-placement="top"></div>
      </div>
      <!-- End Review -->
      <!-- Start Map -->
     
      <!-- End Map -->
      <!-- Start Related Listings -->
      <div class="container-fluid listing-block related" id="rel">
        <div class="pg-header-icon icon-link"></div>
       
      
         
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
