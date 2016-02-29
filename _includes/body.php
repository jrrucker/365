<section id="main" role="main">
	
	<div class="wrapper">

		<article class="article">

			<figure class="feature-image">

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
	
		<?php include "pagination.php"; ?>

	</div><!-- end .wrapper -->
	
</section><!--#main-->