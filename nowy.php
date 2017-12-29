<?php
$channelId = 'UCv7PqO2lW3eK16sQngYPwsA';
$maxResults = 1;
$API_key = 'AIzaSyDCyepfe9p6fqQYHaGMiDQO1jy-gH37l8w';


$video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelId.'&maxResults='.$maxResults.'&key='.$API_key.''));
echo $video_list;
?>
