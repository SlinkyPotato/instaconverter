<?php use MetzWeb\Instagram\Instagram;
$instagram = new Instagram(array(
'apiKey' => '302a9b63dfeb4b258e4b3482192dfe26',
'apiSecret' => '34a9c5236da7462d86bdcfb9d4af8f9e',
'apiCallback' => 'http://localhost'
));
$result = $instagram->getPopularMedia();