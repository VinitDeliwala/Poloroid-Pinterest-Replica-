<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo "$fullName"; ?></title>
		</head>
		<body>
<?php
session_start();
include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>

	<img $_SESSION['captcha']['image_src']>
<?php

$_SESSION['captcha'] = simple_php_captcha( array(
	'min_length' => 5,
	'max_length' => 5,
	'backgrounds' => array(image.png'),
	'fonts' => array('font.ttf'),
	'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZabcdefghjkmnprstuvwxyz23456789',
	'min_font_size' => 28,
	'max_font_size' => 28,
	'color' => '#666',
	'angle_min' => 0,
	'angle_max' => 10,
	'shadow' => true,
	'shadow_color' => '#fff',
	'shadow_offset_x' => -1,
	'shadow_offset_y' => 1
));

?>
</body>
</html>