<?php

	include "../_includes/config.php";
	$pageInfo = array(
		'title' => 'Browse Portraits'
	);

?><!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">

<?php include "../_includes/head-browse.php"; ?>

<body>
	<?php include "../_includes/header.php"; ?>
	<?php include "../_includes/about.php"; ?>

	<section id="main" role="main" class="thumbs">
	
		<div class="wrapper">

			<article class="article">

				<ul>

					<?php $week = 1; ?>
					<?php while($week <= $lastPost): ?>

						<li>
							<a href="<?php echo $base_url . $week . '/'; ?>" title="#<?php echo $week; ?>">
								<img src="<?php echo $base_url . '/_img/portraits/' . $week . '-tb.jpg'; ?>" 
									alt="#<?php echo $week; ?>" />
							</a>
						</li>

					<?php $week++; endwhile; ?>

				</ul>

				<!-- <figure class="feature-image">

					<img 
						src="<?php echo $base_url . $image['image_sm']; ?>" 
						srcset="<?php echo $base_url . $image['image_sm']; ?> 1x, 
								<?php echo $base_url . $image['image_med']; ?> 1.5x, 
								<?php echo $base_url . $image['image_lg']; ?> 2x" 
						alt="<?php echo $image['name']; ?>" />

				</figure>

				<h2 class="article-heading"><span class="count"><?php echo $image['week']; ?></span> / <?php echo $image['name']; ?></h2>		
				<p class="article-meta">
					<time class="article-timestamp" datetime="<?php echo date('Y-m-d', $image['timestamp']); ?>"> 
						<?php echo date('F j, Y', $image['timestamp']); ?>
					</time> &mdash; <?php echo $image['title']; ?>
				</p>

			</article>
		
			<?php include "pagination.php"; ?> -->

		</div><!-- end .wrapper -->
		
	</section><!--#main-->

	<?php include "../_includes/date-navigation.php"; ?>
	<?php include "../_includes/footer.php"; ?>
</body>
</html>