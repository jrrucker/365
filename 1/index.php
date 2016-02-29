<?php

	$image = array(
		'week' => 1,
		'name' => 'Hayden Hildebrand',
		'title' => 'Nephew / Chesapeake, Virginia',
		'timestamp' => strtotime('2015-01-01'),
		'image_sm' => '_img/portraits/1-sm.jpg',
		'image_med' => '_img/portraits/1-med.jpg',
		'image_lg' => '_img/portraits/1.jpg',
		'image_tb' => '_img/portraits/1-tb.jpg'
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