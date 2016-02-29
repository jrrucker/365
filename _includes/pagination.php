<div class="pagination">
		

	<?php if($image['week'] > 1): ?>

		<a class="previous-image" href="<?php echo $base_url . ($image['week'] - 1) . '/'; ?>">
			&laquo; Previous
		</a>

	<?php endif; ?>

	<?php if(($image['week'] < 52) && ($image['week'] < $lastPost)): ?>
	
		<a class="next-image" href="<?php echo $base_url . ($image['week'] + 1) . '/'; ?>">
			Next &raquo;
		</a>

	<?php endif; ?>

</div>