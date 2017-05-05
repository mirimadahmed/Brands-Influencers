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
    								<form id="login-form" action="register_user.php" method="post" enctype="multipart/form-data">
									<center><font color="#FF0000"><?php error_reporting(0); echo $_GET['msg']; ?></font></center>
    									<div class="form-group">
    										<input type="text" name="username" id="register-username"  class="form-control" placeholder="Username" value="" required>
    									</div>
    									<div class="form-group">
    										<input type="email" name="email" id="register-email"  class="form-control" placeholder="Email Address" value="" pattern="|^[a-zA-Z0-9_.]+@[a-z]{3,15}.[a-z]{2,3}$|" required>
    									</div>
    									<div class="form-group">
    										<input type="password" name="password" id="register-password"  class="form-control" placeholder="Password" required>
    									</div>
    									<div class="form-group">
    										<input type="password" name="confirm-password" id="register-confirm-password"  class="form-control" placeholder="Confirm Password" required>
											</div>
											<div class="form-group">
											<input type="radio" value="Male" checked="checked" name="Gender">Male
											<input type="radio" value="Female" name="Gender"> Female
											</div>
											<div class="form-group">
    										<input type="text" name="phone" id="login-username" class="form-control" placeholder="Contact No." value="" required>
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
										<!--<div class="form-group">
    										<input type="text" name="time" id="login-username" class="form-control" placeholder="TimeZone" value="">
    									</div>
										-->
    								   <div align="left"> Expertise Areas:</div>
    									<!-- <div class="form-group">
    										<input type="text" name="expertiseAreas" id="login-username"  class="form-control"  value="<?php echo $expertise;?>"
											placeholder="ExpertiseAreas" readonly>
    									</div>-->
                                        <br/>
    									<div  class="form-group">
										<?php include 'connection.php.inc';
										$sql = "SELECT * FROM  `categories` ";
										$c = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($c)) { ?> 
										<input type="checkbox" name="expertise[]" value="<?php echo $row['area'];?>"><?php echo $row['area'];?>
										<?php } ?>
										</div>
    							        <div class="form-group">
    										<input type="text" name="audience" id="login-username" class="form-control" placeholder="Target Audience" value="">
    									</div>	
										<div class="form-group">
    										<input type="text" name="blog" id="login-username" class="form-control" placeholder="Blog Link" value="">
    									</div>
										<div class="form-group">
                                            <input type="text" name="facebook" id="fb-username" tabindex="1" class="form-control" placeholder="Facebook Profile Link" value="">
                                            <label id="fb-followers"></label>
                                            <input type="hidden" name="fb-followers" id="fb-followers-count" value="0">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="twitter" id="tw-username" tabindex="1" class="form-control" placeholder="Twitter Profile Link" value="">
                                            <label id="tw-followers"></label>
                                            <input type="hidden" name="tw-followers" id="tw-followers-count" value="0">
                                        </div>
                                       <div class="form-group">
                                            <input type="text" name="instagram" id="in-username" tabindex="1" class="form-control" placeholder="Instagram Profile Link" value="">
                                            <label id="in-followers"></label>
                                            <input type="hidden" name="in-followers" id="in-followers-count" value="0">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="pinterest" id="pn-username" tabindex="1" class="form-control" placeholder="Pinterest Profile Link" value="">
                                            <label id="pn-followers"></label>
                                            <input type="hidden" name="pn-followers" id="pn-followers-count" value="0">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="youtube" id="yt-username" tabindex="1" class="form-control" placeholder="Youtube Profile Link" value="">
                                            <label id="yt-followers"></label>
                                            <input type="hidden" name="yt-followers" id="yt-followers-count" value="0">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="google" id="gp-username" tabindex="1" class="form-control" placeholder="Google+ Profile Link" value="">
                                            <label id="gp-followers"></label>
                                            <input type="hidden" name="gp-followers" id="gp-followers-count" value="0">
                                        </div>
										<div class="form-group">
    										<input type="text" name="snapchat" id="login-username" class="form-control" placeholder="SnapChat Username" value="">
    									</div>
										<div align="left">Logo: </div>
										<div class="form-group">
    										<input type="file" name="logo"  style="size:60px;" class="form-control" required>
    									</div>
										<div align="left"> Cover Photo: </div>
										<div class="form-group">
    										<input type="file" name="image1"  style="size:60px;" class="form-control" required>
    									</div>
    									<div class="form-group">
    										<input type="submit" name="register-submit" id="register-submit" class="form-control btn btn-submit" value="Register Now">
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

    <script type="text/javascript">

    $(document).ready(function(){

        var errorGoogle = false;
        var errorFacebook = false;
        var errorTwitter = false;
        var errorPinterest = false;
        var errorYoutube = false;
        var errorInstagram = false;
        

        //Google +
  $("#gp-username").change(function(){
    var twitter_username = $("#gp-username").val();
    if(twitter_username == "") {errorGoogle = false; return;$("#gp-followers-count").val(0);}
    $("#gp-followers").text("Checking");
    var apikey = 'AIzaSyAqlZ1MJSGXMSs8q5WbfvLpZTGJeHLVc2w';
    var url = 'https://www.googleapis.com/plus/v1/people/' + twitter_username + '?key=' + apikey;
  $.ajax({
    url: url,
    dataType : "json",
    type: "GET",
    crossDomain : true
  }).done(function(data) {
    errorGoogle = false;
       $("#gp-followers").text("You have " + data.circledByCount + " circles!");
       $("#gp-followers-count").val(data.circledByCount);
       
  })
  .fail(function() {
    $("#gp-followers").text("invalid username");
    errorGoogle = true;
    $("#gp-followers-count").val(0);
  });

  });


  //Twitter

  $("#tw-username").change(function(){

    var twitter_username = $("#tw-username").val();
    if(twitter_username == "") {errorTwitter = false; return;$("#tw-followers-count").val(0);}
    $("#tw-followers").text("Checking");

  $.ajax({
    url: "https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names="+twitter_username,
    dataType : 'jsonp',
    crossDomain : true
  }).done(function(data) {
    try {
       $("#tw-followers").text("You have " + data[0]['followers_count'] + " Followers!");
       $("#tw-followers-count").val(data[0]['followers_count'] );
       errorTwitter = false;
    }
    catch (e) {
       $("#tw-followers").text("invalid username");
       $("#tw-followers-count").val(0);
       errorTwitter = true;
    }
      
  });

  });

    //Facebook
    $("#fb-username").change(function(){

    var twitter_username = $("#fb-username").val();
    if(twitter_username == "") {errorFacebook = false; return;$("#fb-followers-count").val(0);}
    $("#fb-followers").text("Checking");

  $.ajax({
    url: "fb.php?username="+twitter_username,
    crossDomain : true
  }).done(function(data) {
    try {
        console.log(data);
       $("#fb-followers").text(data);
       if(data == "Invalid username!"){
          $("#fb-followers-count").val(0);
          errorFacebook = true;
       }else{
          $("#fb-followers-count").val(data);
          errorFacebook = false;
       }
       console.log(errorFacebook);
    }
    catch (e) {
       $("#fb-followers").text("Unattended issue");
    }
      
  });

  });

 


    //Instagram
$("#in-username").change(function(){

    var twitter_username = $("#in-username").val();

    if(twitter_username == "") {errorInstagram = false; return;$("#in-followers-count").val(0);}
    $("#in-followers").text("Checking");

  $.ajax({
    url: "in.php?username="+twitter_username,
    crossDomain : true
  }).done(function(data) {
    try {
        console.log(data);
       $("#in-followers").text(data);
       if(errorInstagram == "Invalid username!"){
          errorInstagram = true;
          $("#in-followers-count").val(0);
       }else{
        errorInstagram = false;
        $("#in-followers-count").val(data);
       }
    }
    catch (e) {
       $("#in-followers").text("Unattended issue");
    }
      
  });

  });

    //Youtube
$("#yt-username").change(function(){

    var twitter_username = $("#yt-username").val();

    if(twitter_username == "") {errorYoutube = false; return;$("#yt-followers-count").val(0);}
    $("#yt-followers").text("Checking");

  $.ajax({
    url: "yt.php?username="+twitter_username,
    crossDomain : true
  }).done(function(data) {
    try {
        console.log(data);
       $("#yt-followers").text(data);
       if(errorYoutube == "Invalid username!"){
          errorYoutube = true;
          $("#yt-followers-count").val(0);
       }else{
        errorYoutube = false;
        $("#yt-followers-count").val(data);
       }
    }
    catch (e) {
       $("#yt-followers").text("Unattended issue");
    }
      
  });

  });

    //Pinterest
    $("#pn-username").change(function(){

    var twitter_username = $("#pn-username").val();

    if(twitter_username == "") {errorPinterest = false; return;$("#pn-followers-count").val(0);}
    $("#pn-followers").text("Checking");

  $.ajax({
    url: "pn.php?username="+twitter_username,
    crossDomain : true
  }).done(function(data) {
    try {
        console.log(data);
       $("#pn-followers").text(data);
       if(errorPinterest == "Invalid username!"){
          errorPinterest = true;
          $("#pn-followers-count").val(0);
       }else{
        errorPinterest = false;
        $("#pn-followers-count").val(data);
       }
    }
    catch (e) {
       $("#pn-followers").text("Unattended issue");
    }
      
  });

  });


    function transition() {
        if(errorPinterest || errorYoutube || errorTwitter || errorInstagram || errorGoogle || errorGoogle || errorFacebook){
        $("#register-submit").hide();console.log(1);
    }else{
        $("#register-submit").show();console.log(2);
    }

}
setInterval(transition, 500);
});


    </script>   
  </body>
</html>
