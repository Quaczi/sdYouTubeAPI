<?php
$teamSpeak3Host = TeamSpeak3::factory('serverquery://127.0.0.1:10011/?nickname=TestUser&blocking=0&timeout=1#no_query_clients');
$teamSpeak3Host->login('serveradmin', 'YOUR PASSWORD');
$virtualHost = $teamSpeak3Host->serverGetByPort(9987);

foreach ($virtualHost->serverGroupClientList(6) as $value) {
  var_dump($value);
}
?>