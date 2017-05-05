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
      <div class="search-popup container-fluid hero-header">
        <!-- Start Header Centralizer -->
        <div class="header-centralizer">
          <div class="content-centralized">
            <!-- Start Hero Search -->
            <div class="hero-search">
              <form>
                <fieldset>
                  <input type="text" class="form-control" data-placeholder="Explore and Enjoy...">
                  <span class="typingEffect" data-title="Explore and Enjoy//Find New Places//Discover Tasty Goodies//Do Memorable Check-ins//Go Beyond and Beyond"></span>
                </fieldset>
                <!-- Start Search Cities -->
                <div class="search-cities-toggle"></div>
                <div class="search-cities">
                  <div class="cities-list">
                    <a href="#" style="background-image:url('assets/images/cities/thumbs/1.jpg')" data-city-id="1"><span>Boston</span></a>
                    <a href="#" style="background-image:url('assets/images/cities/thumbs/2.jpg')" data-city-id="2"><span>Chicago</span></a>
                    <a href="#" style="background-image:url('assets/images/cities/thumbs/3.jpg')" data-city-id="0" class="current"><span>Miami</span></a>
                    <a href="#" style="background-image:url('assets/images/cities/thumbs/4.jpg')" data-city-id="3"><span>New Orleans</span></a>
                    <a href="#" style="background-image:url('assets/images/cities/thumbs/5.jpg')" data-city-id="4" class="go-more-cities"><span>More Cities</span></a>
                    <input class="chosen-city" type="hidden" name="city" value="0">
                  </div>
                </div>
                <!-- End Search Cities -->
                <div class="search-submit">
                  <input type="submit" value=" ">
                  <i class="hero-search-icon"></i>
                </div>
              </form>
            </div>
            <!-- End Hero Search -->
            <!-- Start Search Categories -->
            <div class="search-categories">
              <div class="categories">
                <a class="icon-platter child" href="#">Restaurant</a>
                <a class="icon-teacup child" href="#">Café</a>
                <a class="icon-moon" href="#">Nightlife</a>
                <a class="icon-landscape" href="#">Outdoor</a>
                <a class="icon-home" href="#">Lodging</a>
                <a class="icon-car child" href="#">Car Dealer</a>
                <a class="icon-hanger child" href="#">Clothing</a>
                <a class="icon-bench-press child" href="#">Gim</a>
                <a class="icon-saw child" href="#">Home Service</a>
                <a class="icon-laundry child" href="#">Laundry</a>
                <a class="icon-bag-dollar child" href="#">Bank</a>
                <a class="icon-palette child" href="#">Art Gallery</a>
                <a class="icon-library child" href="#">Bookstore</a>
                <a class="icon-chair child" href="#">Furniture</a>
                <a class="icon-receipt" href="#">Coupons</a>
                <a class="icon-lan2" href="#">Online Order</a>
                <a class="icon-paw" href="#">Pets Friendly</a>
                <a class="icon-wheelchair" href="#">Accessible</a>
                <a class="icon-wifi" href="#">Wi-Fi</a>
                <a class="icon-city" href="#">More Options</a>
              </div>
            </div>
            <!-- End Search Categories -->
          </div>
        </div>
      </div>
      <!-- End Search Popup -->
      <!-- Start Login/Register Popup -->
      <div class="login-popup container hero-header">
        <div class="row">
          <div class="">
            <div class="panel panel-form">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <a href="#" class="active" id="login-form-link">Login</a>
                  </div>
                  <div class="col-xs-6">
                    <a href="#" id="register-form-link">Register</a>
                  </div>
                </div>
                <hr>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                    <form id="login-form" action="#" method="post">
                      <div class="form-group">
                        <input type="text" name="username" id="login-username" tabindex="1" class="form-control" placeholder="Username" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" id="login-password" tabindex="2" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group text-center">
                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                        <label for="remember"> Remember Me</label>
                      </div>
                      <div class="form-group">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-submit" value="Log In">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="text-center">
                              <a href="#" tabindex="5" class="login-forgot-password">Forgot Password?</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <form id="register-form" action="#" method="post">
                      <div class="form-group">
                        <input type="text" name="username" id="register-username" tabindex="1" class="form-control" placeholder="Username" value="">
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" id="register-email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" id="register-password" tabindex="2" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" name="confirm-password" id="register-confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
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
      <!-- End Login/Register Popup -->
      <!-- Start Map Listing -->
      <div class="container-fluid map-listing map-hidden">
        <div class="row page-head">
          <div class="current-page-info">
           
            <div class="current-category">
              <i class="current-page-icon icon-user"></i>
              <a href="#">Influencers</a>
            </div>
            <div class="listing-flag icon-flag"></div>
          </div>
          <div class="map-buttom">
            <div class="map-button-text">
              Show Map View
            </div>
          </div>
        </div>
        <div id="map"></div>
        <div class="mapList"></div>
      </div>
      <!-- End Map Listing -->
      <!-- Start Listings Counter and Filter -->
      <div class="container-fluid listing-block">
        <div class="row listing-results">
          <div class="results-count">
            <span class="counter">85</span> results
          </div>
          <!-- Start Listings Filter -->
          <div class="listing-filter">
            <form>
              <a class="grid-icon icon-icons" href="#"></a>
              <a class="grid-icon icon-list4" href="#"></a>
              <a class="grid-icon icon-enter-right2" href="#"></a>
              <a class="grid-icon icon-dial" href="#"></a>
              <a class="grid-icon icon-menu2" href="#"></a>
              <select class="selectpicker" multiple data-max-options="5" data-live-search="true">
                <optgroup label="Cities">
                  <option class="placeholder" hidden selected disabled value="">Filters</option>
                  <option data-icon="icon-city">Boston</option>
                  <option data-icon="icon-city">Chicago</option>
                  <option data-icon="icon-city">Miami</option>
                  <option data-icon="icon-city">New Orleans</option>
                  <option data-icon="icon-city">New York City</option>
                  <option data-icon="icon-city">San Francisco</option>
                  <option data-icon="icon-city">Washington</option>
                </optgroup>
                <optgroup label="Categories">
                  <option data-icon="icon-theater">Entertaiment</option>
                  <option data-icon="icon-palette child">Art Gallery</option>
                  <option data-icon="icon-clapboard-play child">Movie Theather</option>
                  <option data-icon="icon-library2 child">Museum</option>
                  <option data-icon="icon-trophy2 child">Stadium</option>
                  <option data-icon="icon-paw child">Zoo</option>
                  <option data-icon="icon-dinner">Food</option>
                  <option data-icon="icon-chef child">Bakery</option>
                  <option data-icon="icon-teacup child">Café</option>
                  <option data-icon="icon-pizza child">Pizza</option>
                  <option data-icon="icon-platter child">Restaurant</option>
                  <option data-icon="icon-glass child">Winery</option>
                  <option data-icon="icon-moon">Nightlife</option>
                  <option data-icon="icon-glass-cocktail child">Bar</option>
                  <option data-icon="icon-bottle2 child">Brewery</option>
                  <option data-icon="icon-cake child">Lounge</option>
                  <option data-icon="icon-spotlights child">Nightclub</option>
                  <option data-icon="icon-landscape">Outdoor Recreation</option>
                  <option data-icon="icon-construction child">Bridge</option>
                  <option data-icon="icon-tree child">Park</option>
                  <option data-icon="icon-alarm">Service</option>
                  <option data-icon="icon-car child">Car Dealer</option>
                  <option data-icon="icon-pencil-ruler2 child">Design</option>
                  <option data-icon="icon-bench-press child">Gim</option>
                  <option data-icon="icon-saw child">Home Service</option>
                  <option data-icon="icon-laundry child">Laundry</option>
                  <option data-icon="icon-bag">Shop</option>
                  <option data-icon="icon-bag-dollar child">Bank</option>
                  <option data-icon="icon-library child">Bookstore</option>
                  <option data-icon="icon-hanger child">Clothing</option>
                  <option data-icon="icon-chair child">Furniture</option>
                  <option data-icon="icon-home">Lodging</option>
                  <option data-icon="icon-bed child">Hotel</option>
                  <option data-icon="icon-bed child">Apartment</option>
                  <option data-icon="icon-bed child">Villa</option>
                  <option data-icon="icon-bed child">Hostel</option>
                </optgroup>
                <optgroup label="Amenities">
                  <option data-icon="icon-credit-card">Accepts Credit Cards</option>
                  <option data-icon="icon-bicycle">Bike Parking</option>
                  <option data-icon="icon-envelope">Contact Form</option>
                  <option data-icon="icon-receipt">Coupons</option>
                  <option data-icon="icon-baby2">Family/Kids Friendly</option>
                  <option data-icon="icon-hand-waving">Free Entrance</option>
                  <option data-icon="icon-lan2">Online Order</option>
                  <option data-icon="icon-parking">Parking Street</option>
                  <option data-icon="icon-paw">Pets Friendly</option>
                  <option data-icon="icon-phone-wave">Phone</option>
                  <option data-icon="icon-contacts">Reservations</option>
                  <option data-icon="icon-pipe">Smoking Allowed</option>
                  <option data-icon="icon-wheelchair">Wheelchair Accessible</option>
                  <option data-icon="icon-bubble-dots">Whatsapp</option>
                  <option data-icon="icon-wifi">Wireless Internet</option>
                </optgroup>
              </select>
              <input type="submit"/>
            </form>
          </div>
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
FROM  `influencers` ";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query)) {
$id = $row['ID'];
$s="SELECT * 
FROM  `influencerpic` 
WHERE  `influencerID` = '$id'";
$q = mysqli_query($con,$s);
$res = mysqli_fetch_array($q); ?>
            <div class="col-sm-4">
              <div class="listing-item">
                <a href="#" class="category-icon icon-dinner"></a>
                <div class="listing-item-rating">4.9</div>
                <a href="influencer_profile.php?i_id= <?php echo $id; ?>" class="listing-item-link">
                  <div class="listing-item-title-centralizer">
                    <div class="listing-item-title">
                     <?php echo $row['Name']; ?>
                      
                    </div>
                  </div>
                  <img alt="" src="../influencers/influencerPics/<?php echo $res['logo'];?>" />
                </a>
                <div class="listing-item-data">
                  <a class="listing-item-address" href="#">
                   <?php echo $row['TimeZone']; ?>
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
                          <a href="#">Boston</a>
                        </li>
                        <li class="item">
                          <a href="#">Chicago</a>
                        </li>
                        <li class="item">
                          <a href="#">Miami</a>
                        </li>
                        <li class="item">
                          <a href="#">San Francisco</a>
                        </li>
                        <li class="item more-widget-item">
                          <a href="#">Show More</a>
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
                          <a href="#">Tour</a>
                        </li>
                        <li class="item">
                          <a href="#">Eat</a>
                        </li>
                        <li class="item">
                          <a href="#">Relax</a>
                        </li>
                        <li class="item">
                          <a href="#">Buy</a>
                        </li>
                        <li class="item more-widget-item">
                          <a href="#">Show More</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--End Widget-->
                <!--Start Widget-->
                <div class="widget newest-posts"> <!--start widget-->
                  <div class="block">
                    <div class="widget-title">
                      <div class="the-title">
                        MOST RECENT
                      </div>
                    </div>
                    <div class="widget-content">
                      <div class="item">
                        <a href="#">
                          <div class="img">
                            <img alt="" src="assets/images/single-blog/1.jpg" />
                          </div>
                          <div class="text">
                            <div class="title">
                              From Beach Glitz to Urban Ritz, Miami's Hotels Shine
                            </div>
                            <div class="date">
                              Feb 12, 2017
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="item">
                        <a href="#">
                          <div class="img">
                            <img alt="" src="assets/images/blog/2.jpg" />
                          </div>
                          <div class="text">
                            <div class="title">
                              Fill Your Bags with Buys from Boston's Best Shopping Spots
                            </div>
                            <div class="date">
                              Feb 07, 2017
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="item">
                        <a href="#">
                          <div class="img">
                            <img alt="" src="assets/images/blog/3.jpg" />
                          </div>
                          <div class="text">
                            <div class="title">
                              Fall In Love All Over Again During These Romantic Activities in NYC
                            </div>
                            <div class="date">
                              Feb 02, 2017
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End Widget-->
                <!--Start Widget-->
                <div class="widget tags"> <!--start widget-->
                  <div class="block">
                    <div class="widget-title">
                      <div class="the-title">
                        TOP TAGS
                      </div>
                    </div>
                    <div class="widget-content list zoom-text">
                      <ul class="">
                        <li><a href="#">Lunch</a></li>
                        <li><a href="#">Dinner</a></li>
                        <li><a href="#">Breakfast</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Pub</a></li>
                        <li><a href="#">Drinks</a></li>
                        <li><a href="#">Wine</a></li>
                        <li><a href="#">Couple</a></li>
                        <li><a href="#">Families</a></li>
                        <li><a href="#">Business</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--End Widget-->
              </div>
              <!--End Widget Container-->
            </div>
          </div>
          <!-- End Sidebar -->
        </div>
        <div class="more-listing icon-plus" title="More Listings" data-toggle="tooltip" data-placement="top"></div>
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
