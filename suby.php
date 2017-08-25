<?php
$value = $_GET['link'];
$channel = $value;
$t = file_get_contents($channel);
$pattern = '/yt-uix-tooltip" title="(.*)" tabindex/';
preg_match($pattern, $t, $matches, PREG_OFFSET_CAPTURE);
echo $matches[1][0];
?>