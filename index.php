<?php
require 'includes/Instagram.php';
require 'credentials.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Instagram Feed</title>
	</head>
	<body>
		<a class="login" href="<?php echo $instagram->getLoginUrl(); ?>">� Login with Instagram</a>
		<?php
			/*foreach($result->data as $media){
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
			}*/
        echo "User"
		?>
	</body>