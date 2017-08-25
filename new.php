<?php
$gkey = "{TWOJ KLUCZ API}";



$u2 = $_GET["user"];
$user = $u2;
$JSON = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=id%2Csnippet%2Cstatistics%2CcontentDetails%2CtopicDetails&forUsername='.$user.'&key'.$gkey);
$json_data = json_decode($JSON, true);

$id = NULL;
$channel_id = $json_data['items'][0]['id'];

$xml = simplexml_load_file(sprintf('https://www.youtube.com/feeds/videos.xml?channel_id=%s', $channel_id));

if (!empty($xml->entry[0]->children('yt', true)->videoId[0])){
    $id = $xml->entry[0]->children('yt', true)->videoId[0];
}

echo $id; // Outputs the video ID.
?>
