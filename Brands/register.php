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
       <div class="container-fluid no-padding">
        <div class="row">
    			<div class="col-sm-12 text-center">
    				<div class="panel panel-form" style="width:400px">
    					<div class="panel-heading">
    						<div class="row">
    							<div>
    						<a href="#" class="active" id="login-form-link">Register</a>
    							</div>
    							
    						</div>
    						<hr>
    					</div>
    					<div class="panel-body"  style="overflow:auto;height:400px">
    						<div class="row">
    							<div class="col-lg-12">
    								<form id="login-form" action="register_brand.php" method="post" enctype="multipart/form-data">
									<center><font color="#FF0000"><?php error_reporting(0); echo $_GET['msg']; ?></font></center>
    									<div class="form-group">
    										<input type="text" name="name" id="register-username" tabindex="1" class="form-control" placeholder="Brand Name" value="" required>
    									</div>
    									<div class="form-group">
    										<input type="email" name="email" id="register-email" tabindex="1" class="form-control" placeholder="Email Address" value=""
											pattern="|^[a-zA-Z0-9_.]+@[a-z]{3,7}.[a-z]{2,3}$|" required>
    									</div>
    									<div class="form-group">
    										<input type="password" name="password" id="register-password" tabindex="2" class="form-control" placeholder="Password" required>
    									</div>
    									<div class="form-group">
    										<input type="password" name="confirm-password" id="register-confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
											</div>
										
											 <div align="left">City:</div>
											<div class="form-group">
										<select name="city" class="form-control">
										<?php 
										include 'connection.php.inc';
										$b = "SELECT * FROM  `cities`";
										$m = mysqli_query($con,$b);
										while($n = mysqli_fetch_array($m)) { ?>
    									<option value = "<?php echo $n['city'];?> "> <?php echo $n['city'];?> </option>
											<?php }?>
											</select>
    									</div>
						
						  <div align="left">Country:</div>
						  <div class="form-group">
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
						  </div>
											<div class="form-group">
    										<input type="text" name="intro" id="login-username" tabindex="1" class="form-control" placeholder="Brand's Intro" value="">
    									</div>
										<div class="form-group">
    										<input type="text" name="desc" id="login-username" tabindex="1" class="form-control" placeholder="Brand's Description" value="">
    									</div>
										<div class="form-group">
    										<input type="text" name="slogan" id="login-username" tabindex="1" class="form-control" placeholder="Slogan" value="">
    									</div>
									    	<div class="form-group">
    										<input type="text" name="type" id="login-username" tabindex="1" class="form-control" placeholder="Type e.g music,product etc." value=""
											required>
    									</div>
										Cover Photo:
										<div class="form-group">
    										<input type="file" name="cover" tabindex="1" style="size:60px;" class="form-control" required>
    									</div>
    									<div class="form-group">
    										<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-submit" value="Register Now">
    									</div>
										
    								</form>
									
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
