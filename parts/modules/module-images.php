<?php
	$images = get_sub_field('images');

	if ($images) :
?>
<div class="container">
	<div class="row">
		<div class="column column-m-12">
			<?php foreach ($images as $image) : ?>
				<img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="<?php echo $image['alt']; ?>">
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endif; ?>