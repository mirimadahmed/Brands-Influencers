 <?php
 session_start();
 ?>
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
	
          <a href="../influencers/index.php" class="add-listing" target="_blank">I'm an Influencer</a>
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
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Influencers<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="influencer_results.php">List Influencers</a></li>
                  </ul>
                </li>
            <!--    <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="brands.php">Brands</a></li>
                  </ul>
                </li>-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Default Contact</a></li>
                    <li><a href="#">Support</a></li>
                  </ul>
				  <?php 
				  
				  if(isset($_SESSION['b_id']))
				  $id = $_SESSION['b_id'];
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
				   <li><a href="brand_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
					<li><a href="../chat/brand_mailbox.php">Inbox</a></li>
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
              <form action="influencer_results.php" method="post">
                <fieldset>
                  <input type="text" class="form-control" data-placeholder="Find the perfect Brand Ambassador..." name="Search">
                  <span class="typingEffect" data-title="Find the perfect Brand Ambassador//Make your products come to life//Speak to your consumer in another voice"></span>
                </fieldset>
              
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
                 <a class="icon-platter child" href="influencer_results.php?area=food">Food</a>
                <a class="icon-tie child" href="influencer_results.php?area=fashion">Fashion</a>
                <a class="icon-brush" href="influencer_results.php?area=beauty">Beauty</a>
                <a class="icon-road" href="influencer_results.php?area=travel">Travel</a>
                <a class="icon-music-note" href="influencer_results.php?area=music">Music</a>
                <a class="icon-car child" href="influencer_results.php?area=car">Car</a>
				<a class="icon-man-woman child" href="influencer_results.php?area=wedding">Wedding</a>
                <a class="icon-camera child" href="influencer_results.php?area=photography">Photography</a>
                <a class="icon-bandage child" href="influencer_results.php?area=health">Health</a>
                <a class="icon-desktop child" href="influencer_results.php?area=technology">Technology</a>
                <a class="icon-theater" href="influencer_results.php?area=movies">Movies</a>
                <a class="icon-bag-pound child" href="influencer_results.php?area=realestate">Real Estate</a>
                <a class="icon-book child" href="influencer_results.php?area=law">Law</a>
                <a class="icon-library child" href="influencer_results.php?area=politics">Politics</a>
                <a class="icon-baseball-bat child" href="influencer_results.php?area=sports">Sports</a>
                <a class="icon-credit-card" href="influencer_results.php?area=lifestyle">Lifestyle</a>
                <a class="icon-abacus" href="influencer_results.php?area=science">Science</a>
                <a class="icon-paw" href="influencer_results.php?area=pets">Pets</a>
                <a class="icon-briefcase" href="influencer_results.php?area=business">Business</a>
                <a class="icon-menu" href="influencer_results.php?area=fitness">Fitness</a>
                <a class="icon-game" href="influencer_results.php?area=gaming">Gaming</a>
				<a class="icon-cashier" href="influencer_results.php?area=finance">Finance</a>
				<a class="icon-bag-dollar" href="influencer_results.php?area=marketing">Marketing</a>
				 
              </div>
			   
            </div>
            <!-- End Search Categories -->
          </div>
        </div>
      </div>
      <!-- End Search Popup -->
      <!-- Start Page Content -->
    
    				
    				
