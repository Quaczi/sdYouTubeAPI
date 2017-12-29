<?php
$value = $_GET['link'];
$link = $value;
$id = (str_replace("https://www.youtube.com/watch?v=","",$link));
$tid = $id;
$JSON = file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=statistics&id='.$tid.'&key=AIzaSyDCyepfe9p6fqQYHaGMiDQO1jy-gH37l8w');
$json_data = json_decode($JSON, true);
echo $json_data['items'][0]['statistics']['likeCount'];
?>
