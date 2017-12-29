<?php
$value = $_GET['link'];
$link = $value;
$id = (str_replace("https://www.youtube.com/watch?v=","",$link));
$vidId = $id;
$JSON = file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id='.$vidId.'&key=AIzaSyDCyepfe9p6fqQYHaGMiDQO1jy-gH37l8w');
$json_data = json_decode($JSON, true);
$ytDur = $json_data['items'][0]['contentDetails']['duration'];
$stamp = $ytDur;
$formated_stamp = str_replace(array("PT","M","S"), array("",":",""),$stamp);
echo $formated_stamp;
?>
