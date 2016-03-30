<?php
require '/includes/Instagram.php';
use MetzWeb\Instagram\Instagram;
$instagram = new Instagram(array(
    'apiKey' => '302a9b63dfeb4b258e4b3482192dfe26',
    'apiSecret' => '34a9c5236da7462d86bdcfb9d4af8f9e',
    'apiCallback' => 'http://localhost'
));
$result = $instagram->getPopularMedia();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Instagram Feed</title>
    <style>
        .login{
            display: block;
            font-size: 100%;
            font-weight: bold;
            margin: 50px 0 0;
        }
    </style>
</head>
<body>
<a class="login" href="<?php echo $instagram->getLoginUrl(); ?>">� Login with Instagram</a>
</body>
</html>