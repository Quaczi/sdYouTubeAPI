<?php
$value = $_GET['id'];
$channelId = $value; 
$maxResults =1; 
$API_key = 'AIzaSyDCyepfe9p6fqQYHaGMiDQO1jy-gH37l8w'; 
$JSON = file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelId.'&maxResults='.$maxResults.'&key='.$API_key.'');
$json_data = json_decode($JSON, true);
echo $json_data['items'][0]['id']['videoId'];
?>
