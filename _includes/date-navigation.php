<?php
	$month = date('M', $image['timestamp']);
	$day = date('j', $image['timestamp']);
	$daysInMonth = date('t', $image['timestamp']);
?>
<section class="section days">

	<div class="wrapper">
	
		<h2>Day:</h2>
		<ul>

			<?php $cnt = 1; ?>
			<?php while($cnt <= $daysInMonth): ?>

				<?php 
					$tempDate =  date('m/', $image['timestamp']) . str_pad($cnt, 2, '0', STR_PAD_LEFT) . "/2015";
					$tempTime = strtotime($tempDate);
					if($tempTime <= $lastPost):
				?>		
					<li <?php if($cnt == $day): echo 'class="active"'; endif; ?>>
						<a href="<?php echo $base_url . date('m/', $image['timestamp']) . str_pad($cnt, 2, '0', STR_PAD_LEFT); ?>"; ?>
							<?php echo $cnt; ?>
						</a>
					</li>

				<?php else: ?>

					<li><?php echo $cnt; ?></li>

				<?php endif; ?>

			<?php $cnt++; endwhile; ?>

		</ul>
	
	</div><!-- end .wrapper -->

</section><!-- end .section -->	

<section class="section months">

	<div class="wrapper">

		<h2>Month:</h2>
	
		<ul>

		<?php $mon = 1; ?>
		<?php while($mon <= 12): ?>

			<?php $disMon = date('M',strtotime($mon."/1/2015")); ?>

			<?php if(date('m', $lastPost) >= $mon): ?>

				<?php if($disMon == $month): ?>

					<li class="active"><a href="<?php echo $base_url . str_pad($mon, 2, '0', STR_PAD_LEFT) . '/01/'; ?>"><?php echo $disMon; ?></a></li>

				<?php else: ?>

					<li><a href="<?php echo $base_url . str_pad($mon, 2, '0', STR_PAD_LEFT) . '/01/'; ?>"><?php echo $disMon; ?></a></li>

				<?php endif; ?>

			<?php else: ?>

				<li><?php echo $disMon ?></li>

			<?php endif; ?>

			<?php $mon++; endwhile; ?>

		</ul>
	
	</div><!-- end .wrapper -->

</section><!-- end .section -->	