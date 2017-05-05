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

       <?php include 'header.php'; ?>
      <!-- End header (topbar) -->
      <!-- Start Search Popup -->
     
      <!-- End Login/Register Popup -->
      <!-- Start Map Listing -->
           <div class="container-fluid map-listing map-hidden">
        <div class="row page-head">
          <div class="current-page-info" style="width:100%; background-image:url(../influencers/assets/images/backgrounds/14.jpg)">
           
            <div class="current-category">
              <i class="current-page-icon icon-user"></i>
              <a href="#">Influencers</a>
            </div>
            <div class="listing-flag icon-flag"></div>
          </div>
          
        </div>
       
      </div>
      <!-- End Map Listing -->
      <!-- Start Listings Counter and Filter -->
      <div class="container-fluid listing-block">
        <div class="row listing-results">
          <div class="results-count">
            <span class="counter"><?php include 'connection.php.inc';
			if(isset($_GET['area'])) {
			$area = $_GET['area'];
			 $sql ="SELECT * 
FROM  `influencers` 
WHERE  `ExpertiseAreas` LIKE  '%$area%'";
$query = mysqli_query($con,$sql); }
else if(isset($_POST['Search'])) {
$word = $_POST['Search'];
$sql ="SELECT * 
FROM  `influencers` WHERE `Name` Like '%$word%' OR `City` Like '%$word%' OR `Country` Like '%$word%' OR `ExpertiseAreas` Like '%$word%' ";
$query = mysqli_query($con,$sql);
}
else {
 $sql ="SELECT * 
FROM  `influencers`";
$query = mysqli_query($con,$sql); }
$num =mysqli_num_rows($query); echo $num;  ?></span> results
          </div>
          <!-- Start Listings Filter -->
         
          <!-- End Listings Filter -->
        </div>
      </div>
      <!-- End Listings Counter and Filter -->
      <!-- Start Listings Container  -->
      <div class="container-fluid blog listing-block">
        <div class="row listing grid4 white">
          <!-- Start Listings -->
          <div class="col-md-9 text-center">
            <!-- Start Listing Item Col -->
			<?php include 'connection.php.inc';
			if(isset($_GET['area'])) {
			  $area = $_GET['area'];
			 $sql ="SELECT * 
FROM  `influencers` 
WHERE  `ExpertiseAreas` LIKE  '%$area%'";
$query = mysqli_query($con,$sql); }
else if(isset($_POST['Search'])) {
$word = $_POST['Search'];
$sql ="SELECT * 
FROM  `influencers` WHERE `Name` Like '%$word%' OR `City` Like '%$word%' OR `Country` Like '%$word%' OR `ExpertiseAreas` Like '%$word%'";
$query = mysqli_query($con,$sql);
}
else {
 $sql ="SELECT * 
FROM  `influencers`";
$query = mysqli_query($con,$sql); }
while($row = mysqli_fetch_array($query)) {
$id = $row['ID'];
$s="SELECT * 
FROM  `influencerpic` 
WHERE  `influencerID` = '$id'";
$q = mysqli_query($con,$s);
$res = mysqli_fetch_array($q); ?>
            <div class="col-sm-4">
              <div class="listing-item">
                <a href="#" class="category-icon icon-user"></a>
                <a href="influencer_profile.php?i_id= <?php echo $id; ?>" class="listing-item-link">
                  <div class="listing-item-title-centralizer">
                    <div class="listing-item-title">
                     <?php echo $row['Name']; ?>
                      
                    </div>
                  </div>
                  <img alt="" src="../influencers/influencerPics/<?php echo $res['logo'];?>" style="height:250px;width:250px" />
                </a>
                <div class="listing-item-data">
                  <a class="listing-item-address" href="#">
                   <?php echo $row['City'].', '.$row['Country']; ?>
                  </a>
                  <div class="listing-item-excerpt">
                   <?php echo $row['ExpertiseAreas']; ?>
                  </div>
                </div>
              </div>
            </div>
			<?php } ?>
            <!-- End Listing Item Col -->
          
          </div>
          <!-- End Listings -->
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar-right">
            <div class="widget-area">
			<form method="post" id="filters" action="filter_results.php">
              <!--Start Widget Container-->
              <div class="widget-container">
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
						 <option value ="None">None </option>
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
                <!--Start Widget-->
                <div class="widget tags"> <!--start widget-->
                  <div class="block">
                    <div class="widget-title">
                      <div class="the-title">
                       GENDER
                      </div>
                    </div>
                    <div class="widget-content list zoom-text">
                      <ul class="">
					  <center>
					  <input type="radio" name="Gender" value="male" checked="checked">Male
					  <input type="radio" name="Gender" value="female" > Female
					  </center>
          
                      </ul>
                    </div>
                  </div>
                </div>
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
      <!-- End Listings Container  -->
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
    <script src="assets/js/map-markers-samples/sampleMapListingMarkers.js"></script>
    <!-- Main Javascript -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
