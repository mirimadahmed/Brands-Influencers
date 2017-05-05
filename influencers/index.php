<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <title>City Listing - Directory Template</title>
    <!-- Google Font(s) -->
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
  <body class="front-page">
    <!-- Start Body Content Wrapper -->
    <div class="body-wrapper">
      <!-- Start header (topbar) -->
       <?php include 'header.php' ?>
      <!-- End header (topbar) -->
      <!-- Start Login/Register Popup -->
				
      <!-- End Login/Register Popup -->
      <!-- Start Hero Header -->
     <div class="container-fluid hero-header h-video transparent">
        <!-- Start Header Centralizer -->
        <div class="header-centralizer">
          <div class="content-centralized">
            <!-- Start Hero Search -->
            <div class="hero-search">
             <form action="brands.php" method="post">
                <fieldset>
                  <input type="text" class="form-control" data-placeholder="Search for Brands.." name="search">
                  <span class="typingEffect" data-title="Search for Brands"></span>
                </fieldset>
                <!-- Start Search Cities -->
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
                 <a class="icon-platter child" href="brands.php?type=food">Food</a>
                <a class="icon-tie child" href="brands.php?type=fashion">Fashion</a>
                <a class="icon-brush" href="brands.php?type=beauty">Beauty</a>
                <a class="icon-road" href="brands.php?type=travel">Travel</a>
                <a class="icon-music-note" href="brands.php?type=music">Music</a>
                <a class="icon-car child" href="brands.php?type=car">Car</a>
				<a class="icon-man-woman child" href="brands.php?type=wedding">Wedding</a>
                <a class="icon-camera child" href="brands.php?type=photography">Photography</a>
                <a class="icon-bandage child" href="brands.php?type=health">Health</a>
                <a class="icon-desktop child" href="brands.php?type=technology">Technology</a>
                <a class="icon-theater" href="brands.php?type=movies">Movies</a>
                <a class="icon-bag-pound child" href="brands.php?type=realestate">Real Estate</a>
                <a class="icon-book child" href="brands.php?type=law">Law</a>
                <a class="icon-library child" href="brands.php?type=politics">Politics</a>
                <a class="icon-baseball-bat child" href="brands.php?type=sports">Sports</a>
                <a class="icon-credit-card" href="brands.php?type=lifestyle">Lifestyle</a>
                <a class="icon-abacus" href="brands.php?type=science">Science</a>
                <a class="icon-paw" href="brands.php?type=pets">Pets</a>
                <a class="icon-briefcase" href="brands.php?type=business">Business</a>
                <a class="icon-menu" href="brands.php?type=fitness">Fitness</a>
                <a class="icon-game" href="brands.php?type=gaming">Gaming</a>
				<a class="icon-cashier" href="brands.php?type=finance">Finance</a>
				<a class="icon-bag-dollar" href="brands.php?type=marketing">Marketing</a>
              </div>
            </div>
            <!-- End Search Categories -->
          </div>
        </div>
      </div>
      <!-- Ends Hero Header -->
      <!-- Start Front Categories -->
      <div class="container-fluid front-categories vertical">
        <div class="row row-title">
          <h1>What Do You Need Today?</h1>
          <h4>Easily glimpse hand picked places</h4>
        </div>
        <div class="row cat-itens">
           <div class="row cat-itens">
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div  class="cat-image" style="background-image:url('assets/images/categories/1.jpg')"></div>
            <div class="cat-icon icon-bus"></div>
            <div class="cat-counter">
			<?php include 'connection.php.inc';
			 $sql ="SELECT * 
FROM  `brands` 
WHERE  `Type` LIKE  '%travel%'";
$query = mysqli_query($con,$sql);
$travel = mysqli_num_rows($query); echo $travel; ?>
			</div>
            <a href="brands.php?type=travel">
              <div class="cat-text">Travel</div>
            </a>
          </div>
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div class="cat-image" style="background-image:url('assets/images/categories/2.jpg')"></div>
            <div class="cat-icon icon-dinner"></div>
            
		<div class="cat-counter">
		<?php include 'connection.php.inc';
			 $sql ="SELECT * 
FROM  `brands` 
WHERE  `Type` LIKE  '%food%'";
$query = mysqli_query($con,$sql);
$food = mysqli_num_rows($query); echo $food; ?>
			</div>
            <a href="brands.php?type=food">
              <div class="cat-text">Food</div>
            </a>
          </div>
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div  class="cat-image" style="background-image:url('assets/images/categories/3.jpg')"></div>
            <div class="cat-icon icon-music-note"></div>
            <div class="cat-counter">
			<?php include 'connection.php.inc';
			 $sql ="SELECT * 
FROM  `brands` 
WHERE  `Type` LIKE  '%music%'";
$query = mysqli_query($con,$sql);
$music = mysqli_num_rows($query); echo $music; ?></div>
            <a href="brands.php?type=music">
              <div class="cat-text">Music</div>
            </a>
          </div>
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div  class="cat-image" style="background-image:url('assets/images/categories/6.jpg')"></div>
            <div class="cat-icon icon-bag"></div>
            <div class="cat-counter"><?php include 'connection.php.inc';
			 $sql ="SELECT * 
FROM  `brands` 
WHERE  `Type` LIKE  '%fashion%'";
$query = mysqli_query($con,$sql);
$fashion = mysqli_num_rows($query); echo $fashion; ?></div>
            <a href="brands.php?type=fashion">
              <div class="cat-text">Fashion</div>
            </a>
          </div>
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div  class="cat-image" style="background-image:url('assets/images/categories/8.jpg')"></div>
            <div class="cat-icon icon-city"></div>
            <div class="cat-counter">
			<?php include 'connection.php.inc';
			 $sql ="SELECT * 
FROM  `brands` 
WHERE  `Type` LIKE  '%beauty%'";
$query = mysqli_query($con,$sql);
$beauty = mysqli_num_rows($query); echo $beauty; ?>
			</div>
            <a href="brands.php?type=beauty">
              <div class="cat-text">Beauty</div>
            </a>
          </div>
        </div>
      </div>
      <!-- End Front Categories -->
      <!-- Start Trending -->
      <div class="container-fluid trending">
        <div class="row row-title">
          <h1>Trending Right Now</h1>
          <h4>The most visited</h4>
        </div>
        <div class="row listing">
          <!-- Start Trending Item Col -->
		  <?php 
		  include 'connection.php.inc';
		  $sql ="SELECT * 
FROM  `brands` 
ORDER BY  `Count` DESC LIMIT 0,4";
$f = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($f)) { ?>
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="brand_profile.php?b_id=<?php echo $row['ID'];?>" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                 <?php echo $row['Name']; ?>
                  </div>
                </div>
                <img alt="" src="../Brands/BrandPics/<?php echo $row['Cover'];?>" style="height:250px;width:250px" />
              </a>
              <div class="listing-item-data">
                <a class="listing-item-address" href="#">
                  <?php echo $row['City'].', '.$row['Country']; ?>
                </a>
                <div class="listing-item-excerpt">
                  <?php echo $row['Slogan']; ?>
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#"><?php echo $row['Type'];?></a>
              </div>
            </div>
          </div>
		  <?php } ?>
          <!-- End Trending Item Col -->
         
          <!-- End Trending Item Col -->
        </div>
      </div>
      <!-- End Trending -->
      <!-- Start How It Works -->
      <div class="container-fluid how color-bg">
        <div class="row row-title">
          <h1>How it Works</h1>
          <h4>New experiences and opportunities to both sides</h4>
        </div>
        <div class="row how-items">
          <!-- Start How Item Col -->
          <div class="col-sm-3">
            <div class="how-item">
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/icon-1.png" />
                <h3 class="how-item-title">Announcers</h3>
                <div class="how-item-excerpt">
                  Publish a listing to show everyone what are the goodies of your establishment. Add amenities and tags to promote every detail of your listing.
                </div>
              </a>
            </div>
          </div>
          <!-- End How Item Col -->
          <!-- Start How Item Col -->
          <div class="col-sm-3">
            <div class="how-item">
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/icon-2.png" />
                <h3 class="how-item-title">Consumers</h3>
                <div class="how-item-excerpt">
                  Easily find interesting hand-picked places by local experts. Save your time by organizing your trip Online, don't miss any point.
                </div>
              </a>
            </div>
          </div>
          <!-- End How Item Col -->
          <!-- Start How Item Col -->
          <div class="col-sm-3">
            <div class="how-item">
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/icon-3.png" />
                <h3 class="how-item-title">Everyone</h3>
                <div class="how-item-excerpt">
                  Exchange experiences and tastes, extend your personal and profissional network creating long-term business relationship and new friendships.
                </div>
              </a>
            </div>
          </div>
          <!-- End How Item Col -->
          <!-- Start How Item Col -->
          <div class="col-sm-3">
            <div class="how-item">
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/icon-4.png" />
                <h3 class="how-item-title">Free Vs Premium</h3>
                <div class="how-item-excerpt">
                  You can start it free right now and migrate to a premium account anytime you want. Click to see all the plans and resources.
                </div>
              </a>
            </div>
          </div>
          <!-- End How Item Col -->
        </div>
      </div>
      <!-- End How It Works -->
      <!-- Start App -->

      <!-- End App -->
      <!-- Start Blog Section -->
      <div class="container-fluid blog blog-home">
        <div class="row row-title">
          <h1>Tips and Tricks</h1>
          <h4>We have some suggestions to you</h4>
        </div>
        <div class="row listing white">
          <!-- Start Blog Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-news"></a>
              <div class="listing-item-date">
                <div class="day">12</div>
                <div class="month">Feb</div>
              </div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    From Beach Glitz to Urban Ritz, Miami's Hotels Shine
                  </div>
                </div>
                <img alt="" src="assets/images/blog/14.jpg" />
              </a>
              <div class="listing-item-data">
                <div class="listing-item-excerpt">
                  The best relaxing experience
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Relax</a>
              </div>
            </div>
          </div>
          <!-- End Blog Item Col -->
          <!-- Start Blog Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-paperclip"></a>
              <div class="listing-item-date">
                <div class="day">07</div>
                <div class="month">Feb</div>
              </div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    Fill Your Bags with Buys from Boston's Best Shopping Spots
                  </div>
                </div>
                <img alt="" src="assets/images/blog/15.jpg" />
              </a>
              <div class="listing-item-data">
                <div class="listing-item-excerpt">
                  Staple items, unique pieces
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Shop</a>
              </div>
            </div>
          </div>
          <!-- End Blog Item Col -->
          <!-- Start Blog Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-reminder"></a>
              <div class="listing-item-date">
                <div class="day">02</div>
                <div class="month">Feb</div>
              </div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    Fall In Love All Over Again During These Romantic Activities in NYC
                  </div>
                </div>
                <img alt="" src="assets/images/blog/17.jpg" />
              </a>
              <div class="listing-item-data">
                <div class="listing-item-excerpt">
                  Take romance to the next level
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Fun and Entertainment</a>
              </div>
            </div>
          </div>
          <!-- End Blog Item Col -->
          <!-- Start Blog Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-lamp"></a>
              <div class="listing-item-date">
                <div class="day">23</div>
                <div class="month">Jan</div>
              </div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    Get Your Sourdough On at Goat Hill Pizza
                  </div>
                </div>
                <img alt="" src="assets/images/blog/16.jpg" />
              </a>
              <div class="listing-item-data">
                <div class="listing-item-excerpt">
                  Spreading the joy to West Portal
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Food and Drink</a>
              </div>
            </div>
          </div>
          <!-- End Blog Item Col -->
        </div>
      </div>
      <!-- End Blog Section -->
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
    <!-- Vimeo Hero Video Background -->
    <script>
      var vm_video = "141274767";
    </script>
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
    <script src="assets/js/main.js"></script>
  </body>
</html>