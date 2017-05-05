<?php
$error = 0;
if(isset($_GET['username'])){
	$pattern = '/yt-uix-tooltip" title="(.*)" tabindex/';
    $url = 'https://www.youtube.com/channel/'. $_GET['username'];
    $t = @file_get_contents($url); //replace with user
    if($t === FALSE){
      $error = 1;
    }
    preg_match($pattern, $t, $matches, PREG_OFFSET_CAPTURE);
    
  }
   if(isset($_GET['username']) && $error == 0){ 
    echo $matches[1][0]; 
     } 
     if($error == 1){ 
      echo "Invalid username!";
      } 

      ?>