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