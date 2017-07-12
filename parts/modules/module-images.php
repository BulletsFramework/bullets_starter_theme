<?php
	$images = get_sub_field('image_content');
	$button_link = get_sub_field('button_link');
	$button_text = $button_link ? get_sub_field('button_text') : false;
	$button_url = $button_link == 'Internal' ? get_sub_field('page_link') : get_sub_field('external_link');

	if ($images) :
?>
<div class="container">
	<div class="row">
		<?php foreach ($images as $image) : ?>
			<div class="column column-m-12 column-t-6">
				<img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt']; ?>">
			</div>
		<?php endforeach; ?>
	</div>
	<div class="row">
		<div class="column column-m-12">
			<?php if($button_text && $button_url) : ?>
				<a href="<?php echo $button_url; ?>" <?php if($button_link == "External") : ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>><?php echo $button_text; ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>