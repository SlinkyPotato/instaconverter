<?php use MetzWeb\Instagram\Instagram;
$instagram = new Instagram(array(
'apiKey' => 'a150793bf8fd4e6298542236094690b2',
'apiSecret' => '2055c15f158142c3b73d53b2eb180e46',
'apiCallback' => 'http://localhost'
));
$result = $instagram->getPopularMedia();