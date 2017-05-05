 <header class="header">
        <!-- Start Logo -->
        <div class="logo">
          <a href="#" class="logo-color-bg">
            <img alt="" src="assets/images/logo.png"/>
          </a>
        </div>
        <!-- End Logo -->
        <!-- Start User Buttons -->
        <div class="user-buttons">
	
          <a href="../Brands/index.php" target="_blank" class="add-listing">I'm a Brand</a>
        </div>
        <!-- End User Buttons -->
        <!-- Start Navbar -->
        <div class="navbar navbar-inverse" role="navigation" id="slide-nav">
          <div class="container">
            <div id="slidemenu">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="index.php">Home</a>  
                </li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">How it Works</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </li>
               <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Influencers<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="influencer_results.php">List Influencers</a></li>
                  
                  </ul>
                </li>-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="brands.php">List Brands</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Default Contact</a></li>
                    <li><a href="#">Support</a></li>
                  </ul>
				  <?php 
				  session_start();
				  if(isset($_SESSION['id']))
				  $id = $_SESSION['id'];
				  if(empty($id)) {
				  ?>
				  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
                    <li><a href="forgot-password.php">Recover Password</a></li>
                  </ul>
                </li>
				<?php }
				else { ?>
				  <li class="login">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
				   <ul class="dropdown-menu">
				   <li><a href="influencer_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
					 <li><a href="../chat/influencer_mailbox.php">Inbox</a></li>
                  </ul>
				  <!--	<a href="profile.php" class="user-login" target="_self"></a></li>-->
                </li>
				<li class="login">
				  <a href="logout.php">Logout</a>
				  <!--	<a href="profile.php" class="user-login" target="_self"></a></li>-->
                </li>
				<?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Navbar -->
        <!-- Header Search Button -->
        <div class="header-search-button"></div>
      </header>
      <!-- End header (topbar) -->
      <!-- Start Search Popup -->
      <div class="search-popup container-fluid hero-header">
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
      <!-- End Search Popup -->
      <!-- Start Page Content -->
    
    				
    				
