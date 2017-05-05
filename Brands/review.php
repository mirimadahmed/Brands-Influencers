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
  <body class="bg-login">
    <!-- Start Body Content Wrapper -->
    <div class="body-wrapper">
      <!-- Start header (topbar) -->
       <?php include 'header.php';?>
      <!-- End Search Popup -->
      <!-- Start Page Content -->
     
      <!-- Start Review Popup -->
      <div class="container-fluid no-padding">
        <div class="row">
          <div class="col-sm-12 text-center">
    				<div class="panel panel-form" style="width:400px">
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
								 <?php 
		   include 'connection.php.inc';
					   $influencer_id = $_GET['i_id'];
					   if(isset($_SESSION['b_id'])) {
					  // $brand_id = $_SESSION['b_id'];
					   ?>
    								<form id="review-form" class="review-form" action="review_action.php" method="post">
									<center><font color="#FF0000"><?php error_reporting(0); echo $_GET['msg']; ?></font></center>
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
										<input type="hidden" name="influencer" value="<?php echo $influencer_id;?>" >
    										<input type="submit" name="review-submit" id="review-submit" tabindex="4" class="form-control btn btn-submit" value="Submit Review">
    									</div>
    								</form>
									<?php } 
									else {
									header("location:login.php"); 
									}
									?>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
        </div>
      </div>
      <!-- End Page Content -->
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
