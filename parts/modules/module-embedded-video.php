<?php
	$video = get_sub_field('video');

	if($video) :
?>

<div class="container">
	<div class="row">
		<div class="column column-m-12">
			<div class="embed">
				<?php echo $video ?>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>

