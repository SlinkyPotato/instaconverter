<?php
	require '/includes/Instagram.php';
	use MetzWeb\Instagram\Instagram;
	$instagram = new Instagram(array(
		'apiKey' => '31a225fef5b8437eb567a571b006cb75',
		'apiSecret' => '0c92c6682a364cdab197b98e1188a80f',
		'apiCallback' => 'http://localhost'
	));
	$result = $instagram->getPopularMedia();
	print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
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
		<a class="login" href="<?php echo $instagram->getLoginUrl(); ?>">» Login with Instagram</a>
		<?php
			foreach($result->data as $media){
				$content = '<li>';
				// output media
				if($media->type === 'video'){
					// video
					$poster = $media->images->low_resolution->url;
					$source = $media->videos->standard_resolution->url;
					$content .= "<video class=\"media video-js vjs-default-skin\" width=\"250\" height=\"250\" poster=\"{$poster}\"
						   data-setup='{\"controls\":true, \"preload\": \"auto\"}'>
							 <source src=\"{$source}\" type=\"video/mp4\" />
						   </video>";
				}else{
					// image
					$image = $media->images->low_resolution->url;
					$content .= "<img class=\"media\" src=\"{$image}\"/>";
				}
				// create meta section
				$avatar = $media->user->profile_picture;
				$username = $media->user->username;
				$comment = (!empty($media->caption->text)) ? $media->caption->text : '';
				$content .= "<div class=\"content\">
						   <div class=\"avatar\" style=\"background-image: url({$avatar})\"></div>
						   <p>{$username}</p>
						   <div class=\"comment\">{$comment}</div>
						 </div>";
				// output media
				echo $content . '</li>';
			}
		?>
	</body>
</html>