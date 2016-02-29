<?php

	$image = array(
		'week' => 13,
		'name' => 'Gaby Torres &amp; Andrew Bradley',
		'title' => 'Friends / Asheville, North Carolina',
		'timestamp' => strtotime('2014-12-13'),
		'image_sm' => '_img/portraits/13-sm.jpg',
		'image_med' => '_img/portraits/13-med.jpg',
		'image_lg' => '_img/portraits/13.jpg',
		'image_tb' => '_img/portraits/13-tb.jpg'
	);

	include "../_includes/config.php";

?><!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">

<?php include "../_includes/head.php"; ?>

<body>
	<?php include "../_includes/header.php"; ?>
	<?php include "../_includes/about.php"; ?>
	<?php include "../_includes/body.php"; ?>
	<?php include "../_includes/date-navigation.php"; ?>
	<?php include "../_includes/footer.php"; ?>
</body>
</html>