<?php
$value = $_GET['id'];
$channelId = $value; 
$maxResults =1; 
$API_key = 'AIzaSyDCyepfe9p6fqQYHaGMiDQO1jy-gH37l8w'; 
$JSON = file_get_contents('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId='.$channelId.'&eventType=live&maxResults=1&type=video&key=AIzaSyDCyepfe9p6fqQYHaGMiDQO1jy-gH37l8w');
$json_data = json_decode($JSON, true);
echo $json_data['items'][0]['id']['videoId'];
?>
