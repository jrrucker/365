<?php

	$image = array(
		'week' => 9,
		'name' => 'Pamela Rucker',
		'title' => 'Mom / Granite Falls, North Carolina',
		'timestamp' => strtotime('2014-11-28'),
		'image_sm' => '_img/portraits/9-sm.jpg',
		'image_med' => '_img/portraits/9-med.jpg',
		'image_lg' => '_img/portraits/9.jpg',
		'image_tb' => '_img/portraits/9-tb.jpg'
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