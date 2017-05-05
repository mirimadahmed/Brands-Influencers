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
     
      <!-- End Search Popup -->
      <!-- Start Login/Register Popup -->
      
      <!-- End Login/Register Popup -->
      <!-- Start Map Listing -->
       <div class="container-fluid map-listing map-hidden">
        <div class="row page-head">
          <div class="current-page-info" style="background-image:url(../influencers/assets/images/backgrounds/8.jpg); width:100%">
           
            <div class="current-category">
              <i class="current-page-icon icon-menu"></i>
              <a href="#">Brands</a>
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
            <span class="counter">
				<?php include 'connection.php.inc';
			 $sql ="SELECT * 
FROM  `brands` ";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);
echo $num;
?>
			</span> results
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
			 $sql ="SELECT * 
FROM  `brands` ";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)) {
$id = $row['ID'];
$s="SELECT * FROM `brandpics` WHERE `ID` = '$id'";
$q = mysqli_query($con,$s);
$res = mysqli_fetch_array($q); ?>
            <div class="col-sm-4">
              <div class="listing-item">
                <a href="brand_profile.php?b_id= <?php echo $id; ?>" class="listing-item-link">
                  <div class="listing-item-title-centralizer">
                    <div class="listing-item-title">
                     <?php echo $row['Name']; ?>
                      
                    </div>
                  </div>
                  <img alt=""  style="width:250px;height:250px" src="BrandPics/<?php echo $row['Cover']; ?>" />
                </a>
                <div class="listing-item-data">
                  <a class="listing-item-address" href="#">
                   <?php $city = $row['City'];
				   $country = $row['Country'];
				   echo $city. ','. $country;
				   ?>
                  </a>
                  <div class="listing-item-excerpt">
                   <?php echo $row['Type']; ?>
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
			<form method="post" id="filters" action="brand_search.php">
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
						   <option value="none"> None </option>
						  <option value="islamabad"> Islamabad
						  
						  </option>
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
