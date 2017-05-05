
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
    				<div class="panel panel-form" style="width:500px">
    					<div class="panel-heading">
    						<div class="row">
    							<div>
    						<a href="#" class="active" id="login-form-link">Update</a>
    							</div>
    							
    						</div>
    						<hr>
    					</div>
    					<div class="panel-body"  style="overflow:auto;height:400px;">
    						<div class="row">
    							<div class="col-lg-12">
    								<form id="login-form" action="profile-action.php" method="post" enctype="multipart/form-data" >
									<center><font color="#FF0000"><?php error_reporting(0); echo $_GET['msg']; ?></font></center>
									<?php include 'connection.php.inc'; 
									$id= $_SESSION['id'];
									 $sql = "SELECT *  FROM  `influencers` WHERE  `ID` = '$id' ";
									 $query = mysqli_query($con,$sql);
									 $row = mysqli_fetch_array($query);
									 $name = $row['Name'];
									 $email = $row['Email'];
									 $pass = $row['Password'];
									 $repass= $row['Re-Pass'];
									 $gender = $row['Gender'];
									 $intro = $row['intro'];
									 $phone = $row['Phone'];
									 $city = $row['City'];
									 $country = $row['Country'];
									 $time = $row['TimeZone'];
									 $expertise = $row['ExpertiseAreas'];
									 $audience = $row['Audience'];
									 $blog = $row['Blog'];
									 $fb = $row['Facebook'];
									 $twitter = $row['Twitter'];
									 $insta = $row['Instagram'];
									 $pinterest = $row['Pinterest'];
									 $youtube = $row['Youtube'];
									 $google = $row['Google'];
									 $snap = $row['SnapChat'];
									 $sqlz ="SELECT *  FROM  `influencerpic` WHERE  `influencerID` = '$id'";
									 $queryz = mysqli_query($con,$sqlz);
									 $res = mysqli_fetch_array($queryz);
									 $logo = $res['logo'];
									 $img1 = $res['Img1'];
									 $img2 = $res['Img2'];
									 $img3 = $res['Img3'];
									 $img4= $res['Img4'];
									?>
    									<div class="form-group">
    										<input type="text" name="username" id="register-username" tabindex="1" class="form-control" value="<?php echo $name;?>"
											placeholder="Username" required>
    									</div>
    									<div class="form-group">
    										<input type="email" name="email" id="register-email" tabindex="1" class="form-control" value="<?php echo $email;?>"
											placeholder="Email" pattern="|^[a-zA-Z0-9_.]+@[a-z]{3,5}.[a-z]{2,3}$|" required>
    									</div>
    									<div class="form-group">
    										<input type="password" name="password" id="register-password" tabindex="2" class="form-control" value="<?php echo $pass;?>"
											placeholder="Password" required>
    									</div>
    									<div class="form-group">
    										<input type="password" name="confirm-password" id="register-confirm-password" tabindex="2" class="form-control" 
											value="<?php echo $repass;?>" placeholder="Re-Password" required>
											</div>
											<div align="left">Gender:</div>
										<div class="form-group">
											<input type="text" name="Gender" id="login-username" tabindex="1" class="form-control"  value="<?php echo $gender;?>"
											placeholder="Gender" disabled="disabled">
											</div>
											<div class="form-group">
											<input type="radio" value="Male"  name="Gender" required>Male
											<input type="radio" value="Female" name="Gender">Female
											</div>
											<div class="form-group">
											<input type="text" height="600px" width="400px" name="desc" class="form-control" placeholder="A Little Intro about Yourself"
											value="<?php echo $intro;?>" />
											</div>
											<div class="form-group">
    										<input type="text" name="phone" id="login-username" tabindex="1" class="form-control"  value="<?php echo $phone;?>"
											placeholder="Phone" required>
    									</div>
										<div align="left">City:</div>
										<div class="form-group">
											<input type="text" name="city" id="login-username" tabindex="1" class="form-control"  value="<?php echo $city;?>"
											placeholder="City" disabled="disabled">
											</div>
											<div class="form-group">
										<select name="city" class="form-control">
										<?php 
										$b = "SELECT * FROM  `cities`";
										$m = mysqli_query($con,$b);
										while($n = mysqli_fetch_array($m)) { ?>
    									<option value = "<?php echo $n['city'];?> "> <?php echo $n['city'];?> </option>
											<?php }?>
											</select>
    									</div>
										<div align="left">Country:</div>
										<div class="form-group">
											<input type="text" id="login-username" tabindex="1" class="form-control"  value="<?php echo $country;?>"
											placeholder="Country" disabled="disabled">
											</div>
										<div class="form-group">
    											<select name="country" class="form-control">
						<option value="">None </option>
						<option value="pakistan"> Pakistan </option>
						<option value="france"> France </option>
						<option value="canada"> Canada</option>
						<option value="unitedstates">United States</option>
						<option value="china">China</option>
						<option value="spain">Spain</option>
						<option value="italy">Italy</option>
						<option value="turkey">Turkey</option>
						<option value="unitedkingdom">United Kingdom</option>
						<option value="germany">Germany</option>
						<option value="russia">Russia</option>
						<option value="malasyia">Malaysia</option>
						<option value="mexiico">Mexico</option>
						<option value="austria">Austria</option>
						<option value="australia">Australia</option>
						<option value="argentina">Argentina</option>
						<option value="brazil">Brazil</option>
						<option value="sweden">Sweden</option>
						<option value="norway">Norway</option>
						<option value="ukraine">Ukraine</option>
						<option value="thailand">Thailand</option>
						<option value="saudiarabia">Saudi Arabia</option>
						<option value="greece">Greece</option>
						<option value="poland">Poland</option>
						<option value="netherlands">Netherlands</option>
						<option value="singapore">Singapore</option>
						<option value="hungary">Hungary</option>
						<option value="croatia">Croatia</option>
						<option value="korea">Korea</option>
						<option value="egypt">Egypt</option>
						<option value="morocco">Morocco</option>
						<option value="czechrepublic">Czech Republic</option>
						<option value="switzerland">Switzerland</option>
						<option value="southafrica">South Africa</option>
						<option value="indonesia">Indonesia</option>
						<option value="ireland">Ireland</option>
						<option value="romania">Romania</option>
						<option value="belgium">Belgium</option>
						<option value="portugal">Portugal</option>
						<option value="bahrian">Bahrain</option>
						<option value="bulgaria">Bulgaria</option>
						<option value="india">India</option>
						<option value="japan">Japan</option>
						<option value="vietnam">Vietnam</option>
						</select>
    									</div>
										<div class="form-group">
    										<input type="text" name="time" id="login-username" tabindex="1" class="form-control" value="<?php echo $time;?>"
											placeholder="TimeZone">
    									</div>
										<div class="form-group">
    								  <div align="justify">Expertise Areas:</div>
									   <div class="form-group">
    										<input type="text" name="expertiseAreas" id="login-username" tabindex="1" class="form-control"  value="<?php echo $expertise;?>"
											placeholder="ExpertiseAreas" readonly>
    									</div>
    									<div  class="form-group">
										<?php include 'connection.php.inc';
										$sql = "SELECT * FROM  `categories` ";
										$c = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($c)) { ?> 
										<input type="checkbox" name="expertise[]" value="<?php echo $row['area'];?>"><?php echo $row['area'];?>
										<?php } ?>
										</div>
										<!--<input type="checkbox" name="expertise[]" value="Fashion">Fashion
										</div>
										<div class="form-group">
										<input type="checkbox" name="expertise[]" value="Beauty">Beauty
										</div>-->
    							        <div class="form-group">
    										<input type="text" name="audience" id="login-username" tabindex="1" class="form-control" value="<?php echo $audience;?>"
											placeholder="Target Audience">
    									</div>	
										<div class="form-group">
    										<input type="text" name="blog" id="login-username" tabindex="1" class="form-control" value="<?php echo $blog;?>"
											placeholder="Blog Link">
    									</div>
										<div class="form-group">
    										<input type="text" name="facebook" id="login-username" tabindex="1" class="form-control" value="<?php echo $fb;?>"
											placeholder="Facebook Profile Link">
    									</div>
										<div class="form-group">
    										<input type="text" name="twitter" id="login-username" tabindex="1" class="form-control" value="<?php echo $twitter;?>"
											placeholder="Twitter Profile Link">
    									</div>
									   <div class="form-group">
    										<input type="text" name="instagram" id="login-username" tabindex="1" class="form-control"  value="<?php echo $insta;?>"
											placeholder="Instagram Profile Link">
    									</div>
										<div class="form-group">
    										<input type="text" name="pinterest" id="login-username" tabindex="1" class="form-control" value="<?php echo $pinterest;?>"
											placeholder="Pinterest Profile Link">
    									</div>
										<div class="form-group">
    										<input type="text" name="youtube" id="login-username" tabindex="1" class="form-control" value="<?php echo $youtube;?>"
											placeholder="Youtube Profile Link">
    									</div>
										<div class="form-group">
    										<input type="text" name="google" id="login-username" tabindex="1" class="form-control"  value="<?php echo $google;?>"
											placeholder="Google+ Profile Link">
    									</div>
										<div class="form-group">
    										<input type="text" name="snapchat" id="login-username" tabindex="1" class="form-control"  value="<?php echo $snap;?>"
											placeholder="SnapChat Profile Link">
    									</div>
										<div align="left">Logo:</div>
										 <div class="form-group">
										<input type="file" name="logo" tabindex="1" style="size:60px;"class="form-control">
										</div>
										<div align="left"><Img src="influencerPics/<?php echo $logo;?>" style="height:100px;width:140px"></div>
										<div align="left"><br> Cover Photo:</div>
										 <div class="form-group">
										<input type="file" name="image1" tabindex="1" style="size:60px;"class="form-control">
										</div>
										<div align="left"><Img src="influencerPics/<?php echo $img1;?>" style="height:100px;width:140px"></div>
    								   <div align="left"> <br> Upload More Pics:</div>
									   <div class="form-group">
									   <br>
											<input type="file" name="image2" tabindex="1" style="size:60px;"  class="form-control">
											</div>
											<div align="left">
											<?php if(!empty($img2)) {?> <Img src="influencerPics/<?php echo $img2;?>" style="height:100px;width:140px"><?php } ?> </div>
											<div class="form-group">
											<br>
											<input type="file" name="image3" tabindex="1" style="size:60px;"  class="form-control">
											</div>
											<div align="left">
											<?php if(!empty($img3)) {?> <Img src="influencerPics/<?php echo $img3;?>" style="height:100px;width:140px"> <?php } ?> </div>
											<div class="form-group">
											<br>
											<input type="file" name="image4" tabindex="1" style="size:60px;"  class="form-control">
    									</div>
										<div align="left">
										<?php if(!empty($img4)) {?> <Img src="influencerPics/<?php echo $img4;?>" style="height:100px;width:140px"> <?php } ?></div>
    									<div class="form-group">
    										<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-submit" value="Update Now">
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
