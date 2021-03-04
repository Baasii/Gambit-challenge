<?php
//$text = file_get_contents('data.txt');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://tuftuf.gambitlabs.fi/feed.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$text = curl_exec($ch);
curl_close($ch); 
?>