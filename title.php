<?php
$gkey = "{TWOJ KLUCZ API}";


function get_youtube_title($video_id){
    $html = 'https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&key'.$gkey.'&part=snippet';
    $response = file_get_contents($html);
    $decoded = json_decode($response, true);
    foreach ($decoded['items'] as $items) {
         $title= $items['snippet']['title'];
         return $title;
    }
}
$value = $_GET['link'];
$link = $value;
$id = (str_replace("https://www.youtube.com/watch?v=","",$link));
$tid = $id;
echo $title = get_youtube_title($tid);
?>
