<?php

	$image = array(
		'week' => 12,
		'name' => 'Luke Townsend',
		'title' => 'Friend / Hudson, North Carolina',
		'timestamp' => strtotime('2014-11-29'),
		'image_sm' => '_img/portraits/12-sm.jpg',
		'image_med' => '_img/portraits/12-med.jpg',
		'image_lg' => '_img/portraits/12.jpg',
		'image_tb' => '_img/portraits/12-tb.jpg'
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