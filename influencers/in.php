<?php
$error = 0;
if(isset($_GET['username'])){
    $url = 'https://www.instagram.com/'. $_GET['username'];
    $raw = @file_get_contents($url); //replace with user
    if($raw === FALSE){
      $error = 1;
    }
    preg_match('/\"followed_by\"\:\s?\{\"count\"\:\s?([0-9]+)/',$raw,$m);
    
  }
 if(isset($_GET['username']) && $error == 0){ 
  echo intval($m[1]); 
   } 
    if($error == 1){ 
      echo "Invalid username!";
      } 

?>