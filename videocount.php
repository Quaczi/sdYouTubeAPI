<?php
$value = $_GET['id'];
$channelId = $value;
$API_key = 'AIzaSyDCyepfe9p6fqQYHaGMiDQO1jy-gH37l8w';
$JSON = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=snippet%2CcontentDetails%2Cstatistics&id='.$channelId.'&key=AIzaSyDCyepfe9p6fqQYHaGMiDQO1jy-gH37l8w');
$json_data = json_decode($JSON, true);
echo $json_data['items'][0]['statistics']['videoCount'];
?>
