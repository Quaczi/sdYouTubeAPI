<?php
$gkey = "{TWOJ KLUCZ API}";




function getDurationInSeconds($talkId){
   $vidkey = $talkId ;
   $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$vidkey&key=$gkey");
   $VidDuration =json_decode($dur, true);
   foreach ($VidDuration['items'] as $vidTime)
   {
       $VidDuration= $vidTime['contentDetails']['duration'];
   }
   preg_match_all('/(\d+)/',$VidDuration,$parts);
   $hours = intval(floor($parts[0][0]/60) * 60 * 60);
   $minutes = intval($parts[0][0]%60 * 60);
   $seconds = intval($parts[0][1]);
   $totalSec = $hours + $minutes + $seconds; //this is the example in seconds
   return $totalSec;
}

$value = $_GET['link'];
$link = $value;
$id = (str_replace("https://www.youtube.com/watch?v=","",$link));
$tid = $id;
echo $title = getDurationInSeconds($tid);

?>
