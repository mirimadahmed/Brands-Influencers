<?php
if(isset($_GET['username'])){

    $url = 'https://www.pinterest.com/'. $_GET['username'];
    $metas = get_meta_tags($url); 
  }if(isset($_GET['username'])){ 
    if(isset($metas['pinterestapp:followers'])){
     echo $metas['pinterestapp:followers']; 
   }else{
   echo "Invalid username!";
    }
 } ?>