<?php
$gkey = "{TWOJ KLUCZ API}";






$value = $_GET['link'];
$link = $value;
$id = (str_replace("https://www.youtube.com/watch?v=","",$link));
$vId = $id;

$dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&id=".$vId."&key=".$gkey."");


$data = json_decode($dur, true);
foreach ($data['items'] as $rowdata) {
     $vTime = $rowdata['contentDetails']['duration'];
     $desc = $rowdata['snippet']['description'];
}


$interval = new DateInterval($vTime);
$vsec = $interval->h * 3600 + $interval->i * 60 + $interval->s;

if($vsec > 3600)
    $vsec = gmdate("H:i:s", $vsec);
else
    $vsec = gmdate("i:s", $vsec);

echo $desc;
?>
