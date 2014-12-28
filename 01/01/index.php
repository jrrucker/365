<?php

	$base_url = 'http://localhost:8888/365/';

	$image = array(
		'day' => 1,
		'name' => 'Cody Wilcox',
		'title' => 'Professional Kid',
		'timestamp' => strtotime('2015-01-01'),
		'image_sm' => '_img/portraits/1-sm.jpg',
		'image_med' => '_img/portraits/1-med.jpg',
		'image_lg' => '_img/portraits/1.jpg',
		'image_tb' => '_img/portraits/1-tb.jpg'
	);

	include "../../_includes/last-post.php";

?><!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">

<?php include "../../_includes/head.php"; ?>

<body>
		
	<?php include "../../_includes/header.php"; ?>
	<?php include "../../_includes/about.php"; ?>

	<section id="main" role="main">
		
		<div class="wrapper">

			<article class="article">

				<div class="pagination">
			

					<?php if($image['timestamp'] > strtotime('01/01/2015')): ?>

						<a class="previous-image" href="<?php echo $base_url . date('m/d/',($image['timestamp'] - 60*60*24)); ?>">
							&laquo; Previous
						</a>

					<?php endif; ?>

					<?php if(($image['timestamp'] <= strtotime('12/31/2015') && $image['timestamp'] < $lastPost)): ?>
					
						<a class="next-image" href="<?php echo $base_url . date('m/d/',($image['timestamp'] + 60*60*24)); ?>">
							Next &raquo;
						</a>

					<?php endif; ?>

				</div>
				
				<figure class="feature-image">

					<img 
						src="<?php echo $base_url . $image['image_sm']; ?>" 
						srcset="<?php echo $base_url . $image['image_sm']; ?> 1x, 
								<?php echo $base_url . $image['image_med']; ?> 1.5x, 
								<?php echo $base_url . $image['image_lg']; ?> 2x" 
						alt="Cody Wilcox" />

				</figure>

				<h2 class="article-heading"><span class="count"><?php echo $image['day']; ?></span> / <?php echo $image['name']; ?></h2>		
				<p class="article-meta">
					<time class="article-timestamp" datetime="<?php echo date('Y-m-d', $image['timestamp']); ?>"> 
						<?php echo date('F j, Y', $image['timestamp']); ?>
					</time> &mdash; <?php echo $image['title']; ?>
				</p>

			</article>
		
		</div><!-- end .wrapper -->
		
	</section><!--#main-->

	<?php include "../../_includes/date-navigation.php"; ?>
	<?php include "../../_includes/footer.php"; ?>

</body>
</html>