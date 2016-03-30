<?php
require 'includes/Instagram.php';
require 'credentials.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Instagram Feed</title>
    <script src="assets/css/style.css"></script>
</head>
<body>
<a class="login" href="<?php echo $instagram->getLoginUrl(); ?>">� Login with Instagram</a>
</body>
</html>