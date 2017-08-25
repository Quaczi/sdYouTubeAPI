<?php
$gkey = "{TWOJ KLUCZ API}";


$value = $_GET['link'];
$link = $value;
$id = (str_replace("https://www.youtube.com/watch?v=","",$link));
$tid = $id;
$JSON = file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=statistics&id='.$tid.'&key='.$gkey);
$json_data = json_decode($JSON, true);
echo $json_data['items'][0]['statistics']['likeCount'];
?>
