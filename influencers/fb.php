<?php
$error = 0;
$username = $_GET['username'];
$access_token = '141673495986810|7g3W4wRBEj6XV0PLkthuESXzbC0';
  $url = 'https://graph.facebook.com/v2.2/'. $username. '?fields=likes&access_token='.$access_token;
  $curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);   
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);  
curl_close($curl);
$details = json_decode($result,true);
  if(isset($details['error'])){
  	$error = 1;
  }else{
  	$likes = $details['likes'];
  }
  if(isset($_GET['username']) && $error == 0){
    echo $likes;
   }
  if($error == 1){
   echo "Invalid username!";
   } 
?>