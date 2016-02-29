<section class="section months">

	<div class="wrapper">

		<h2>Vol:</h2>
	
		<ul>

		<?php $week = 1; ?>
		<?php while($week <= $lastPost): ?>

			<?php if($week == $image['week']): ?>

				<li class="active"><a href="<?php echo $base_url . $week . '/'; ?>"><?php echo $week; ?></a></li>

			<?php elseif($week <= $lastPost): ?>

					<li><a href="<?php echo $base_url . $week . '/'; ?>"><?php echo $week; ?></a></li>

			<?php else: ?>

				<li><?php echo $week ?></li>

			<?php endif; ?>

			<?php $week++; endwhile; ?>

		</ul>
	
	</div><!-- end .wrapper -->

</section><!-- end .section -->	